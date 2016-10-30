<?php

use yii\db\Migration;
use yii\db\Schema;

class m161029_113616_create_option extends Migration
{
    public function safeUp(){
        $this->createTable('option', ['id'=>Schema::TYPE_PK,
                                     'id_combo'=>Schema::TYPE_INTEGER.' not null',
                                     'code'=>Schema::TYPE_INTEGER.' not null',
                                     'name'=>Schema::TYPE_STRING.'(50) not null',
                                     'description'=>Schema::TYPE_STRING.'(100)',
                                     'order'=>Schema::TYPE_INTEGER.' not null default 0',
                                     'state'=>Schema::TYPE_INTEGER.'(2) not null default 1']);
        $this->addForeignKey('fk_id_combo', 'option', 'id_combo', 'combo', 'id');
    }

    public function safeDown(){
        $this->dropTable('option');
    }
}
