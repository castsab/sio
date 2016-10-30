<?php

use yii\db\Migration;
use yii\db\Schema;

class m161017_115155_create_line_business extends Migration
{
    public function safeUp()
    {
        $this->createTable('line_business', [
            'id'=>Schema::TYPE_INTEGER,
            'name'=>Schema::TYPE_STRING.'(50) not null',
            'description'=>Schema::TYPE_STRING.'(100)',
            'state'=>Schema::TYPE_INTEGER.'(2) not null default 1']);
        $this->addPrimaryKey('pk_line_business_id', 'line_business', 'id');
    }

    public function safeDown()
    {
        $this->dropTable('line_business');
    }
}
