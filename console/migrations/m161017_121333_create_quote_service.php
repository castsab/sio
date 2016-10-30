<?php

use yii\db\Migration;
use yii\db\Schema;

class m161017_121333_create_quote_service extends Migration
{
    public function safeUp()
    {
        $this->createTable('quote_service', [
            'id'=>Schema::TYPE_BIGPK,
            'id_quote' => Schema::TYPE_BIGINT.' not null',
            'id_user' => Schema::TYPE_INTEGER.' not null',
            'id_service'=>Schema::TYPE_INTEGER.' not null',
            'estimate_hours' => Schema::TYPE_SMALLINT.'(5)',
            'status'=>Schema::TYPE_SMALLINT.'(2) default 1',
            'created_at' => Schema::TYPE_INTEGER . ' not null',
      	    'updated_at' => Schema::TYPE_INTEGER . ' not null',
        ]);
        
        $this->addForeignKey('fk_quote_service_quote', 'quote_service', 'id_quote', 'quote', 'id');
        $this->addForeignKey('fk_quote_service_user', 'quote_service', 'id_user', 'user', 'id');
        $this->addForeignKey('fk_quote_service_service', 'quote_service', 'id_service', 'service', 'id');
    }

    public function safeDown()
    {
        $this->dropTable('quote_service');
    }
}
