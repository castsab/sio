<?php

use yii\db\Migration;
use yii\db\Schema;

class m161017_120521_create_quote extends Migration
{
    public function safeUp()
    {
        $this->createTable('quote', [
            'id'=>Schema::TYPE_BIGINT,
            'id_user'=>Schema::TYPE_INTEGER.' not null',
            'document'=>Schema::TYPE_BIGINT.' not null',
            'apply discount' => Schema::TYPE_SMALLINT.'(2) default 0',
            'discount' => Schema::TYPE_SMALLINT.'(2)',
            'status'=>Schema::TYPE_SMALLINT.'(2) default 1',
            'created_at' => Schema::TYPE_INTEGER . ' not null',
      	    'updated_at' => Schema::TYPE_INTEGER . ' not null',
        ]);
        
        $this->addPrimaryKey('pk_quote_id', 'quote', 'id');
        $this->addForeignKey('fk_quote_user', 'quote', 'id_user', 'user', 'id');
        $this->addForeignKey('fk_quote_client', 'quote', 'document', 'client', 'document');
    }

    public function safeDown()
    {
        $this->dropTable('quote');
    }
}
