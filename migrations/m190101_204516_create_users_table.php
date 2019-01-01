<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation of table `users`.
 */
class m190101_204516_create_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('yii_users', [
            'id' => Schema::TYPE_PK,
            'username' => Schema::TYPE_TEXT,
            'password' => Schema::TYPE_TEXT,
            'authKey' => Schema::TYPE_TEXT,
            'accessToken' => Schema::TYPE_TEXT
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('users');
    }
}
