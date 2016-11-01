<?php

use yii\db\Schema;
use yii\db\Migration;

class m161101_142158_alter_user extends Migration
{
    public function safeUp(){
        $this->addColumn('user', 'first_name', Schema::TYPE_STRING . '(100)');
        $this->addColumn('user', 'last_name', Schema::TYPE_STRING . '(100)');
    }

    public function safeDown(){
        $this->dropColumn('user', 'first_name');
        $this->dropColumn('user', 'last_name');
    }
}
