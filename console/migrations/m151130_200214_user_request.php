<?php

use yii\db\Migration;

class m151130_200214_user_request extends Migration
{
    public function up()
    {
        $this->createTable('{{%request}}', [
            'id' => $this->primaryKey(),
            'device' => $this->string()->notNull(),
            'discount_card' => $this->string()->notNull(),
            'allow_to_call' => $this->string()->notNull(),
            'image' => $this->string()->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable('{{%request}}');
    }
}
