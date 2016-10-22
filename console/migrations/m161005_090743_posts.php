<?php

use yii\db\Migration;

class m161005_090743_posts extends Migration
{
    public function safeUp()
    {
         $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        
        $this->createTable('{{%posts}}', [
            'post_id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'post_text' => $this->text(),
            'post_image' => $this->string(255),
        ], $tableOptions);
        $this -> createIndex("posts_user", "{{%posts}}", "user_id");
        $this ->addForeignKey("FK_posts_user", "{{%posts}}", "user_id", "{{%user}}", "id");
    }
    
    
    public function safeDown()
    {
        $this->dropForeignKey("FK_posts_user", "{{%posts}}");
        $this->dropTable('{{%posts}}');
    }
    
}
