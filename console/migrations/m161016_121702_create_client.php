<?php

use yii\db\Migration;
use yii\db\Schema;

class m161016_121702_create_client extends Migration
{
    public function safeUp()
    {
        $this->createTable('client', [
            'type_document'=>Schema::TYPE_SMALLINT . '(2) not null',
            'document'=>Schema::TYPE_BIGINT . ' not null',
            'id_user'=>Schema::TYPE_INTEGER.' not null',
            'type_client'=>Schema::TYPE_SMALLINT . '(2) not null',
            'city_origin' => Schema::TYPE_STRING . '(50) not null',
            
            'name_company' => Schema::TYPE_STRING . '(200)',
            'address'=>Schema::TYPE_STRING . '(100)',
            'web_site' => Schema::TYPE_STRING . '(100)',
            'fax' => Schema::TYPE_STRING . '(50)',
            'pbx' => Schema::TYPE_STRING . '(50)',
            
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
        
        $this->addPrimaryKey('pk_client_document', 'client', 'document');
        $this->addForeignKey('fk_client_user', 'client', 'id_user', 'user', 'id');
    }

    public function safeDown()
    {
        $this->dropTable('client');
    }

}
