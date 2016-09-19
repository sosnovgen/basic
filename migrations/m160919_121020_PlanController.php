<?php

use yii\db\Migration;
use yii\db\Schema;

class m160919_121020_PlanController extends Migration
{
    public function up()
    {
        $this->createTable('plan', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING . ' NOT NULL',
            'preview' => Schema::TYPE_STRING,
            'duration' => Schema::TYPE_STRING,
            'content' => Schema::TYPE_STRING,
            'diploma' => Schema::TYPE_STRING,
            'cena' => Schema::TYPE_FLOAT,
            'created_at' =>Schema::TYPE_DATETIME,
        ]);
    }

    public function down()
    {
        echo "m160919_121020_PlanController cannot be reverted.\n";

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
