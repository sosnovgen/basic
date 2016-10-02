<?php

use yii\db\Migration;
use yii\db\Schema;


class m161002_093552_Front extends Migration
{
    public function up()
    {
        $this->createTable('front', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING . ' NOT NULL',
            'preview' => Schema::TYPE_STRING,
            'group' => Schema::TYPE_STRING,
            'content' => Schema::TYPE_TEXT,
            'priznak' => Schema::TYPE_STRING,
            'cena' => Schema::TYPE_FLOAT,
            'created_at' =>Schema::TYPE_DATETIME,
        ]);
    }

    public function down()
    {
        echo "m161002_093552_Front cannot be reverted.\n";

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
