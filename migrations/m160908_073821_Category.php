<?php

use yii\db\Migration;
use yii\db\Schema;

class m160908_073821_Category extends Migration
{
    public function up()
    {
        $this->createTable('category', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING . ' NOT NULL',
            'preview' => Schema::TYPE_STRING,
        ]);
    }

    public function down()
    {
        echo "m160908_073821_Category cannot be reverted.\n";

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
