<?php

use yii\db\Migration;

class m160919_195347_PlanChangeText extends Migration
{
    public function up()
    {
        $this->alterColumn('plan', 'content', 'text');
    }

    public function down()
    {
        echo "m160919_195347_PlanChangeText cannot be reverted.\n";

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
