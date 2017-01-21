<?php

use yii\db\Migration;
use yii\db\Schema;

class m170121_095609_alter_quote_service extends Migration
{
    public function safeUp()
    {
        $this->addColumn('quote_service', 'activity', Schema::TYPE_STRING);
    }

    public function safeDown()
    {
        $this->dropColumn('quote_service', 'activity');
    }

}
