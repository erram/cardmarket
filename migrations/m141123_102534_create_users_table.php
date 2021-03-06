<?php

use yii\db\Schema;
use yii\db\Migration;

class m141123_102534_create_users_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('user', [
            'user_id' => Schema::TYPE_PK,
            'username' => Schema::TYPE_STRING . ' NOT NULL',
            'password' => Schema::TYPE_STRING . ' NOT NULL',
            'created_at' => Schema::TYPE_TIMESTAMP,
            'updated_at' => Schema::TYPE_TIMESTAMP,
        ]);

        parent::safeUp(); // TODO: Change the autogenerated stub
    }

    public function safeDown()
    {
        $this->dropTable('user');
        parent::safeDown(); // TODO: Change the autogenerated stub
    }
}
