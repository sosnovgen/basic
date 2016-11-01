<?php

use yii\db\Migration;

class m161031_092007_ChangeOrder extends Migration
{
    public function up()
    {
        $this->alterColumn('order','completed','string(24)');
    }

    public function down()
    {
        echo "m161031_092007_ChangeOrder cannot be reverted.\n";

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
