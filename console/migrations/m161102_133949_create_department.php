<?php

use yii\db\Schema;
use yii\db\Migration;

class m161102_133949_create_department extends Migration
{
    public function safeUp(){
        $this->createTable('department', [
            'id'=>Schema::TYPE_INTEGER,
            'name'=>Schema::TYPE_STRING.'(50) not null',
            'status'=>Schema::TYPE_INTEGER.'(2) not null default 10',
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ]);
        
        $this->addPrimaryKey('pk_department_id', 'department', 'id');
    }

    public function safeDown(){
        $this->dropTable('department');
    }
}
