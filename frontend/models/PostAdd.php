<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use common\models\Posts;

/**
 * PostAdd is the model behind the post publishing form.
 */
class PostAdd extends Model
{
    public $post_text;
    public $post_image;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['post_text'], 'string'], 
            [['post_image'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'post_text' => 'Текст сообщения',
            'post_image' => 'Изображение'
        ];
    }
    
    public function createPost()
    {
        if (!$this->validate())
        {
            return NULL;
        }
        
        else {
            $post = new Posts();
            $post->post_text = $this->post_text;
            $post->post_image = $this->post_image;
//            $post->user_id = Yii::$app->getUser->id;
            return $post->save() ? $post : NULL;
        }
    }
    
    /**
     * @param $picture UploadedFile
     * @return bool результат загрузки
     */
    
    public static function uploadImage($picture) {
        $picture_file = Posts::getImageDir() . $picture->name;
        
        if ($picture->saveAs($picture_file))
        {
            return Posts::IMAGE_PATH . $picture->name;
        }
        else
        {
            return null;
        }
    }

}
