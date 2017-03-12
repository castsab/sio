<?php

use yii\db\Migration;

class m170312_220323_alter_quote extends Migration
{
    public function up()
    {
        $this->addColumn('quote', 'administrative_expenses', \yii\db\Schema::TYPE_SMALLINT.'(2) default 0');
    }

    public function down()
    {
        $this->dropColumn('quote', 'administrative_expenses');
    }

}
