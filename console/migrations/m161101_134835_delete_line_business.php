<?php

use yii\db\Schema;
use yii\db\Migration;

class m161101_134835_delete_line_business extends Migration
{
    public function safeUp()
    {
        $this->dropTable('line_business');
    }

    public function safeDown()
    {
        $this->createTable('line_business', [
            'id'=>Schema::TYPE_INTEGER,
            'name'=>Schema::TYPE_STRING.'(50) not null',
            'description'=>Schema::TYPE_STRING.'(100)',
            'state'=>Schema::TYPE_INTEGER.'(2) not null default 1']);
        $this->addPrimaryKey('pk_line_business_id', 'line_business', 'id');
    }

}
