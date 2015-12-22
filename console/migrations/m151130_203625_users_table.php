<?php

use yii\db\Migration;

class m151130_203625_users_table extends Migration
{
    public function up()
    {
        $this->createTable('{{%users}}', [
            'id' => $this->primaryKey(),
            'full_name' => $this->string()->notNull(),
            'email' => $this->string()->notNull(),
            'city' => $this->string()->notNull(),
            'phone_number' => $this->string()->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable('{{%users}}');
    }
}
