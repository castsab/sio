<?php

use yii\db\Migration;
use yii\db\Schema;

class m161017_125031_create_client_contact extends Migration
{
    public function safeUp()
    {
        $this->createTable('client_contact', [
            'id'=>Schema::TYPE_PK,
            'document'=>Schema::TYPE_BIGINT . ' not null',
            'id_user'=>Schema::TYPE_INTEGER.' not null',
            'first_name' => Schema::TYPE_STRING . '(100)',
            'last_name' => Schema::TYPE_STRING . '(100)',
            'office_address' => Schema::TYPE_STRING . '(100)',
            'email' => Schema::TYPE_STRING . '(100)',
            'cell_phone' => Schema::TYPE_INTEGER.'(10)',
            'local_phone' => Schema::TYPE_INTEGER.'(10)',
            'extension' => Schema::TYPE_INTEGER.'(5)',
            'contact_project'=>Schema::TYPE_SMALLINT . '(2) not null',
            'contact_business'=>Schema::TYPE_SMALLINT . '(2) not null',
            'status'=>Schema::TYPE_INTEGER.'(2) default 1',
            'created_at' => Schema::TYPE_INTEGER . ' not null',
      	    'updated_at' => Schema::TYPE_INTEGER . ' not null',
        ]);
        
        $this->addForeignKey('fk_client_contact_client', 'client_contact', 'document', 'client', 'document');
        $this->addForeignKey('fk_client_contact_user', 'client_contact', 'id_user', 'user', 'id');
    }

    public function safeDown()
    {
        $this->dropTable('client_contact');
    }
    
}