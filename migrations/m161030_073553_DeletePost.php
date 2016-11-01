<?php

use yii\db\Migration;

class m161030_073553_DeletePost extends Migration
{
    public function up()

    {
        $this->dropTable('post');
    }

    public function down()
    {

        $this->createTable('post', [
            'id' => $this->primaryKey(),
            'title' => $this->string(12)->notNull(),
            'preview' => $this->string(36),
            'body' => $this->text(),
            'priznak' => $this->string(12),
            'created_at' =>$this->datatime(),
        ]);
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
