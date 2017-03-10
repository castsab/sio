<?php

use yii\db\Migration;

class m170307_141726_alter_quote extends Migration
{
    public function up()
    {
        $this->addColumn('quote', 'quote_iva', \yii\db\Schema::TYPE_SMALLINT.'(2) default 0');
    }

    public function down()
    {
        $this->dropColumn('quote', 'quote_iva');
    }

}
