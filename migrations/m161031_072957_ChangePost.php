<?php

use yii\db\Migration;

class m161031_072957_ChangePost extends Migration
{
    public function up()
    {
        $this->alterColumn('post','title','string(64)');
    }

    public function down()
    {
        echo "m161031_072957_ChangePost cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
