<?php

use yii\db\Migration;
use yii\db\Schema;

class m170112_015141_create_activity extends Migration
{
    public function safeUp(){
        $this->createTable('activity', ['id'=>Schema::TYPE_PK,
                                        'id_service'=>Schema::TYPE_INTEGER.' not null',
                                        'code'=>Schema::TYPE_INTEGER.' not null',
                                        'name'=>Schema::TYPE_STRING.'(200) not null',
                                        'description'=>Schema::TYPE_TEXT,
                                        'order'=>Schema::TYPE_INTEGER.' not null default 0',
                                        'state'=>Schema::TYPE_INTEGER.'(2) not null default 1']);
        $this->addForeignKey('fk_id_service', 'activity', 'id_service', 'service', 'id');
    }

    public function safeDown(){
        $this->dropTable('activity');
    }
}
