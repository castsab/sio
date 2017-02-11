<?php

use yii\db\Migration;
use yii\db\Schema;

class m170211_114936_create_person extends Migration
{
    public $table = 'person';
    
    public function up()
    {
        $this->createTable($this->table, [
            'type_document'=> Schema::TYPE_SMALLINT.'(2) not null',
            'document'=>  Schema::TYPE_BIGINT.' not null',
            'first_name'=> Schema::TYPE_STRING . '(100)',
            'last_name'=> Schema::TYPE_STRING . '(100)',
            'email'=>  Schema::TYPE_STRING.'(100)',
            'phone'=>Schema::TYPE_STRING.'(20)',
            'quote_person_natural'=>  Schema::TYPE_SMALLINT.'(2) default 0',
            'active_user'=>  Schema::TYPE_SMALLINT.'(2) default 0',
            'status'=>  Schema::TYPE_SMALLINT.'(2) default 1',
            'created_at' => Schema::TYPE_INTEGER,
            'updated_at' => Schema::TYPE_INTEGER
        ]);
        
        $this->addPrimaryKey('pk_person_document', 'person', 'document');
    }

    public function down()
    {
        $this->dropTable($this->table);
    }

}
