<?php

use yii\db\Schema;
use yii\db\Migration;

class m161101_134321_alter_service extends Migration
{
    public function safeUp(){
        $this->addColumn('service', 'id_line_business', Schema::TYPE_SMALLINT.'(2) not null');
    }

    public function safeDown()
    {
        $this->addColumn('service', 'id_line_business', Schema::TYPE_SMALLINT.'(2) not null');
    }

}
