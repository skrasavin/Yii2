<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%activities}}`.
 */
class m190912_181602_create_activities_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('activities', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(), // varchar(255) not null
            'date_start' => $this->string(),
            'date_end' => $this->string(),
            'user_id' => $this->integer(),
            'description' => $this->text(),
            'repeat' => $this->boolean(),
            'blocked' => $this->boolean(),

            //'attachments' => '', реляционная связь
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('activities');
    }
}
