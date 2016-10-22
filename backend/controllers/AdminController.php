<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\Posts;
use backend\models\PostAdd;
use yii\web;
use common\models\LoginForm;

/**
 * Admin controller
 */
class AdminController extends Controller
{
    
    public $layout = 'admin.php';


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
        if (!\Yii::$app->user->isGuest)
        {
            return $this -> render('index', []);
        }
        else
        {
            return $this->goHome();
        }
    }
    
    public function actionTime()
    {
        if (!\Yii::$app->user->isGuest)
        {
            return $this -> render('time', [
            ]);
        }
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
