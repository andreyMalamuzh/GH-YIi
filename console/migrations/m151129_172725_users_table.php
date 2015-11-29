<?php

use yii\db\Migration;

class m151129_172725_users_table extends Migration
{
    public function up()
    {
       $this->createTable('{{%users}}', [
            'id' => $this->primaryKey(),
            'full_name' => $this->string()->notNull(),
            'email' => $this->string()->notNull(),
            'city' => $this->string()->notNull(),
            'phone_number' => $this->string()->notNull(),
            'device' => $this->string()->notNull(),
            'discount_card' => $this->string()->notNull(),
            'allow_to_call' => $this->string()->notNull(),
            'image' => $this->string()->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable('{{%users}}');
    }
}
