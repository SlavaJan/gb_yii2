<?php

use yii\db\Migration;

class m161005_103904_posts_created_at extends Migration
{
    public function safeUp()
    {
        $this->addColumn("{{%posts}}", "created_at", $this->timestamp());
    }

    public function safeDown()
    {
        $this->dropColumn("{{%posts}}", "created_at");
    }
    
}
