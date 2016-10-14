<?php

use yii\db\Migration;

class m161012_092719_FrontAddColumn extends Migration
{
    public function up()
    {
        $this -> addColumn('front', 'duty', $this -> string());
    }


    public function down()
    {
        echo "m161012_092719_FrontAddColumn cannot be reverted.\n";

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
