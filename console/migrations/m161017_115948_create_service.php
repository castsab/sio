<?php

use yii\db\Migration;
use yii\db\Schema;

class m161017_115948_create_service extends Migration
{
    public function safeUp()
    {
        $this->createTable('service', [
            'id'=>Schema::TYPE_INTEGER,
            'id_user'=>Schema::TYPE_INTEGER.' not null',
            'id_line_business'=>Schema::TYPE_INTEGER.' not null',
            'name'=>Schema::TYPE_STRING.'(50) not null',
            'description'=>Schema::TYPE_STRING.'(100)',
            'status'=>Schema::TYPE_INTEGER.'(2) default 1',
            'created_at' => Schema::TYPE_INTEGER . ' not null',
      	    'updated_at' => Schema::TYPE_INTEGER . ' not null',
        ]);
        
        $this->addPrimaryKey('pk_service_id', 'service', 'id');
        $this->addForeignKey('fk_service_user', 'service', 'id_user', 'user', 'id');
        $this->addForeignKey('fk_service_line_business', 'service', 'id_line_business', 'line_business', 'id');
    }

    public function safeDown()
    {
        $this->dropTable('line_business');
    }
}
