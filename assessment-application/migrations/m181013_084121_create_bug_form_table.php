<?php

use yii\db\Migration;

/**
 * Handles the creation of table `bug_form`.
 */
class m181013_084121_create_bug_form_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('bug_form', [
            'id' => $this->primaryKey(11),
            'user_id' => $this->integer(11)->notNull(),
            'name' => $this->string(50)->notNull(),
            'email' => $this->string(50)->notNull(),
            'body' => $this->text()->notNull(),
            'image' => $this->string(50)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('bug_form');
    }
}
