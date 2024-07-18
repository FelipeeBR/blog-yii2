<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%post_categoria}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%post}}`
 * - `{{%categoria}}`
 */
class m240717_224008_create_junction_table_for_post_and_categoria_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%post_categoria}}', [
            'post_id' => $this->integer(),
            'categoria_id' => $this->integer(),
            'PRIMARY KEY(post_id, categoria_id)',
        ]);

        // creates index for column `post_id`
        $this->createIndex(
            '{{%idx-post_categoria-post_id}}',
            '{{%post_categoria}}',
            'post_id'
        );

        // add foreign key for table `{{%post}}`
        $this->addForeignKey(
            '{{%fk-post_categoria-post_id}}',
            '{{%post_categoria}}',
            'post_id',
            '{{%post}}',
            'id',
            'CASCADE'
        );

        // creates index for column `categoria_id`
        $this->createIndex(
            '{{%idx-post_categoria-categoria_id}}',
            '{{%post_categoria}}',
            'categoria_id'
        );

        // add foreign key for table `{{%categoria}}`
        $this->addForeignKey(
            '{{%fk-post_categoria-categoria_id}}',
            '{{%post_categoria}}',
            'categoria_id',
            '{{%categoria}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%post}}`
        $this->dropForeignKey(
            '{{%fk-post_categoria-post_id}}',
            '{{%post_categoria}}'
        );

        // drops index for column `post_id`
        $this->dropIndex(
            '{{%idx-post_categoria-post_id}}',
            '{{%post_categoria}}'
        );

        // drops foreign key for table `{{%categoria}}`
        $this->dropForeignKey(
            '{{%fk-post_categoria-categoria_id}}',
            '{{%post_categoria}}'
        );

        // drops index for column `categoria_id`
        $this->dropIndex(
            '{{%idx-post_categoria-categoria_id}}',
            '{{%post_categoria}}'
        );

        $this->dropTable('{{%post_categoria}}');
    }
}
