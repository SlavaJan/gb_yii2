<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%posts}}".
 *
 * @property integer $post_id
 * @property integer $user_id
 * @property string $post_text
 * @property string $post_image
 * @property User $user
 * @property $created_at
 */
class Posts extends \yii\db\ActiveRecord
{
    const IMAGE_DIR = './../frontend/web/upload/';
    const IMAGE_PATH = '/upload/';
    
    const MODE_BOTH = 30;
    const MODE_TEXT = 20;
    const MODE_IMAGE = 10;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%posts}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id'], 'integer'],
            [['post_text'], 'string'],
            [['post_image'], 'string', 'max' => 255],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'post_id' => 'Post ID',
            'user_id' => 'User ID',
            'post_text' => 'Post Text',
            'post_image' => 'Post Image',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
    
    public static function getImageDir()
    {
        if (!is_dir(self::IMAGE_DIR)) 
        {
            mkdir(self::IMAGE_DIR);
        }
        return self::IMAGE_DIR;
    }
    
    public function getContent()
    {
        $result = new \stdClass();
        $result->mode = 0;
        if ($this->post_image)
        {
            $result->post_image = $this->post_image;
            $result->mode = self::MODE_IMAGE;
        }
        if ($this->post_text)
        {
            $result->post_text = $this->post_text;
            $result->mode = self::MODE_TEXT;
        }
        if ($this->post_text && $this->post_image)
        {
            $result->mode = self::MODE_BOTH;
        }
        return $result;
    }
    
    
}
