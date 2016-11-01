<?php

use yii\db\Migration;

class m161030_074845_PostNew extends Migration
{
    public function up()
    {
        $this->createTable('post', [
            'id' => $this->primaryKey(),
            'title' => $this->string(12)->notNull(),
            'preview' => $this->string(36),
            'body' => $this->text(),
            'priznak' => $this->string(12),
            'created_at' =>$this->datetime(),
        ]);
    }

    public function down()
    {
        echo "m161030_074845_PostNew cannot be reverted.\n";

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
