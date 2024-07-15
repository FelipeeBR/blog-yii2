<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%post}}`.
 */
class m240715_022525_create_post_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%post}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(45)->notNull(),
            'description' => $this->text(),
            'created_by' => $this->integer()->notNull(),
            'updated_by' => $this->integer()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ]);
        $this->createIndex('idx-post-created_by', '{{%post}}', 'created_by', );
        $this->addForeignKey('fk-post-created_by', '{{%post}}', 'created_by', '{{%usuario}}', 'id', 'CASCADE', 'CASCADE');
        
        $this->createIndex('idx-post-updated_by', '{{%post}}', 'updated_by', );
        $this->addForeignKey('fk-post-updated_by', '{{%post}}', 'updated_by', '{{%usuario}}', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%post}}');
    }
}
