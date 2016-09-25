<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\Posts;

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
        return [
            
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this -> render('dashboard', [
            
        ]);
    }
    
    public function actionTime()
    {
        return $this -> render('time', [
        ]);
        
    }
    
    public function actionAdd()
    {
        $post = new Posts();
        
        $tweet = Yii::$app->request->post('Posts');
        if (count($tweet))
        {
            $post->post_text = $tweet['post_text'];
            
            if ($post->save())
            {
                $post = new Posts();
            }
        }
               
        return $this -> render('add', [
            'post' => $post
        ]);
        
    }
}
