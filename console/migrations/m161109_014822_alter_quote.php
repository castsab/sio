<?php

use yii\db\Migration;
use yii\db\Schema;

class m161109_014822_alter_quote extends Migration
{
    public function safeUp(){
        $this->addColumn('quote', 'status_quote', Schema::TYPE_SMALLINT . '(2)');
        $this->addColumn('quote', 'vbma', Schema::TYPE_INTEGER);
    }

    public function safeDown(){
        $this->dropColumn('quote', 'status_quote');
        $this->dropColumn('quote', 'vbma');
    }
}
