<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation of table `gallery`.
 */
class m190101_141250_create_gallery_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('gallery', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING,
            'imageUrl' => Schema::TYPE_STRING,
            'creationDate' => Schema::TYPE_DATETIME
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('gallery');
    }
}
