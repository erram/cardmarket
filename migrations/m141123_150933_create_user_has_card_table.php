<?php

use yii\db\Schema;
use yii\db\Migration;

class m141123_150933_create_user_has_card_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('user_has_card', [
            'user_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'card_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'wish' => Schema::TYPE_BOOLEAN . ' DEFAULT FALSE',
            'created_at' => Schema::TYPE_TIMESTAMP,
            'updated_at' => Schema::TYPE_TIMESTAMP
        ]);
        $this->addPrimaryKey('pk_user_has_card', 'user_has_card', ['user_id', 'card_id']);
        $this->addForeignKey('fk_user_id', 'user_has_card', 'user_id', 'user', 'user_id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_card_id', 'user_has_card', 'card_id', 'card', 'card_id', 'CASCADE', 'CASCADE');

        parent::safeUp(); // TODO: Change the autogenerated stub
    }

    public function safeDown()
    {
        $this->dropTable('user_has_card');
        parent::safeDown(); // TODO: Change the autogenerated stub
    }
}
