<?php

use yii\db\Migration;
use yii\db\Schema;

class m171125_211845_alter_client extends Migration
{
    public function safeUp()
    {
        $this->alterColumn('client', 'cell_phone', Schema::TYPE_STRING . '(20)');
    }

    public function safeDown()
    {
        $this->alterColumn('client', 'cell_phone', Schema::TYPE_INTEGER . '(10)');
    }
}
