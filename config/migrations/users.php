<?php

use yii\db\Migration;

class mxxxxxx_xxxxxx_create_users_table extends Migration
{
    public function up()
    {
        $this->createTable('users', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull(),
            'email' => $this->string()->notNull(),
            'role' => $this->enum(['admin','user','manager'])->notNull(),
            // Add more columns here as needed
        ]);
    }

    public function down()
    {
        $this->dropTable('users');
    }
}