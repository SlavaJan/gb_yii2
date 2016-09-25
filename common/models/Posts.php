<?php

namespace common\models;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "{{%posts}}".
 *
 * @property integer $post_id
 * @property string $post_text
 * @property string $post_image
 * @property integer $likes_count
 * @property integer $reposts_count
 * @property string $created_at
 * @property integer $user_id
 * @property string $user_name
 * @property string $user_image_url
 * @property string $user_url
 */
class Posts extends ActiveRecord
{
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
            [['post_text'], 'required'],
            [['post_id', 'likes_count', 'reposts_count', 'user_id', 'is_repost'], 'integer'],
            [['post_text'], 'string'],
            [['created_at'], 'safe'],
            [['post_image'], 'string', 'max' => 255],
            [['user_name'], 'string', 'max' => 20],
            [['user_image_url', 'user_url'], 'string', 'max' => 200],
            [['user_url'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'post_id' => 'Post ID',
            'post_text' => 'Post Text',
            'post_image' => 'Post Image',
            'likes_count' => 'Likes Count',
            'reposts_count' => 'Reposts Count',
            'created_at' => 'Created At',
            'user_id' => 'User ID',
            'user_name' => 'User Name',
            'user_image_url' => 'User Image Url',
            'user_url' => 'User Url',
            'is_repost' => 'Is Repost',
        ];
    }
}
