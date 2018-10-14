<?php

use yii\db\Migration;

/**
 * Class m180619_195809_add_user_table
 */
class m180619_195809_add_user_table extends Migration
{

    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(11),
            'username' => $this->string(50),
            'password' => $this->string(50),
            'is_active' => $this->boolean()
        ]);
    }

    public function down()
    {
        $this->dropTable('user');
    }
}
