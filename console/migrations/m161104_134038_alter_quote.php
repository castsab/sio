<?php

use yii\db\Schema;
use yii\db\Migration;

class m161104_134038_alter_quote extends Migration
{
    public function safeUp()
    {
        $this->dropColumn('quote', 'apply discount');
        $this->addColumn('quote', 'apply_discount', Schema::TYPE_SMALLINT.'(2) default 0');
    }

    public function safeDown()
    {
        $this->addColumn('quote', 'apply_discount', Schema::TYPE_SMALLINT.'(2) default 0');
    }
}
