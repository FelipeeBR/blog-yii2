<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%usuario}}`.
 */
class m240717_213607_create_usuario_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%usuario}}', [
            'id' => $this->primaryKey()->notNull(),
            'username' => $this->string(45)->notNull(),
            'password' => $this->string(45)->notNull(),
            'auth_key' => $this->string(45)->null(),
            'acessToken' => $this->string(45)->null(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%usuario}}');
    }
}
