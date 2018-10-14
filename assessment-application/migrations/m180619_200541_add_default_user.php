<?php

use yii\db\Migration;

/**
 * Class m180619_200541_add_default_user
 */
class m180619_200541_add_default_user extends Migration
{

    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->insert('user', ['id' => 1, 'username' => 'admin', 'password' => 'test', 'is_active' => true]);
        $this->insert('user', ['id' => 2, 'username' => 'disabled', 'password' => 'test', 'is_active' => false]);
    }

    public function down()
    {
        $this->truncateTable('user');
    }
}
