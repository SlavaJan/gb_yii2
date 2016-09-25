<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\Posts;
use yii\helpers\Url;

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
        
        return $this -> render('index', [
            'posts'=> $post,
            
        ]);
    }
    
    public function actionSingle()
    {
        $id = Yii::$app->request->get('id');
        $post_text = Posts::findOne($id) -> post_text;
        
//        if (empty($post)) {
//            throw new \yii\web\HttpException(404, 'Запрошенная страница не найдена');
//        }
        return $this -> render('single', [
           'post_id' => $id,
           'post_text' => $post_text
        ]);
        
    }
}
