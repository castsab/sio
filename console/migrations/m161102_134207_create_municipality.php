<?php

use yii\db\Schema;
use yii\db\Migration;

class m161102_134207_create_municipality extends Migration
{
    public function safeUp(){
        $this->createTable('municipality', [
            'id'=>Schema::TYPE_INTEGER,
            'id_department'=>Schema::TYPE_INTEGER.' not null',
            'name'=>Schema::TYPE_STRING.'(50) not null',
            'status'=>Schema::TYPE_INTEGER.'(2) not null default 10',
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ]);
        
        $this->addPrimaryKey('pk_municipality_id', 'municipality', 'id');
        $this->addForeignKey('fk_id_department', 'municipality', 'id_department', 'department', 'id');
    }

    public function safeDown(){
        $this->dropTable('municipality');
    }
}
