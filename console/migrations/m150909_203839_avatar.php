<?php

use yii\db\Migration;
use yii\db\Schema;
use common\models\User;
use common\models\Avatar;

class m150909_203839_avatar extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        
        $this->createTable(Avatar::tableName(), [
            'user_id' => Schema::TYPE_INTEGER . ' PRIMARY KEY',
            'prefix' => Schema::TYPE_STRING . '(255) NOT NULL',
            'suffix' => Schema::TYPE_STRING . '(255) NOT NULL',
            'create_time' => Schema::TYPE_INTEGER . ' NOT NULL',
            'update_time' => Schema::TYPE_INTEGER . ' NOT NULL',
            'FOREIGN KEY (`user_id`) REFERENCES ' . User::class . ' (`id`) ON DELETE CASCADE ON UPDATE CASCADE'
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable(Avatar::tableName());
    }
}
