<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\Posts;
use yii\helpers\Url;
use common\models\LoginForm;
use frontend\models\SignupForm;
use frontend\models\PostAdd;

/**
 * Blog controller
 */
class BlogController extends Controller
{
    
    public $layout = 'blog.php';


    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $post = Posts::find()
                -> orderBy('post_id DESC')
                -> all();
        $user_id= Posts::getUser()->id;
        return $this -> render('index', [
            'posts'=> $post,
            'user_id'=> $user_id,
        ]);
    }
    
    public function actionSingle()
    {
        $id = Yii::$app->request->get('id');
        $post_text = Posts::findOne($id) -> post_text;
        $created_at = Posts::findOne($id) -> created_at;
        
//        if (empty($post)) {
//            throw new \yii\web\HttpException(404, 'Запрошенная страница не найдена');
//        }
        return $this -> render('single', [
           'post_id' => $id,
           'post_text' => $post_text,
           'created_at' => $created_at
        ]);
        
    }
    
    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }
    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->goHome();
    }
    
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()))
        {
            if ($user = $model->signup())
            {
                if (Yii::$app->getUser()->login($user))
                {
                    return $this->goHome();
                }
            }
        }
        return $this->render('signup', [
            'model' => $model,
        ]);
    }
    
    public function actionAdd()
    {
        if (!\Yii::$app->user->isGuest)
        {
        $post_form = new PostAdd();
        $tweet = Yii::$app->request->post('PostAdd');
        if (count($tweet))
        {
            $picture = web\UploadedFile::getInstance($post_form, 'image');
            $image = null;
            if ($picture)
            {
                $image = PostAdd::uploadImage($picture);
            }
            $post_form->post_text = $tweet['post_text'];
            $post_form->post_image = $image;
            if ($post_form->createPost())
            {
                return $this->refresh();
            }
        } 
        return $this -> render('add', [
            'post_form' => $post_form
        ]);
        }
    }
}
