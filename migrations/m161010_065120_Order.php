<?php

use yii\db\Migration;
use yii\db\Schema;

class m161010_065120_Order extends Migration
{
    public function up()
    {
        $this->createTable('order', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . ' NOT NULL',
            'phone' => Schema::TYPE_STRING . ' NOT NULL',
            'curs' => Schema::TYPE_STRING . ' NOT NULL',
            'content' => Schema::TYPE_STRING,
            'completed' => Schema::TYPE_BOOLEAN,
            'status' => Schema::TYPE_STRING,
            'created_at' =>Schema::TYPE_DATETIME,
        ]);
    }

    public function down()
    {
        echo "m161010_065120_Order cannot be reverted.\n";

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
