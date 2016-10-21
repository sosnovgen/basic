<?php

use yii\db\Migration;
use yii\db\Schema;

class m161021_075046_full extends Migration
{
    public function up()
    {
        $this->createTable('full', [
            'id' => Schema::TYPE_PK,
            'plan_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'content' => Schema::TYPE_TEXT,
            'created_at' =>Schema::TYPE_DATETIME,
        ]);
    }

    public function down()
    {
        echo "m161021_075046_full cannot be reverted.\n";

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
