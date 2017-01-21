<?php

use yii\db\Migration;
use yii\db\Schema;

class m170121_152600_alter_quote_service extends Migration
{
    public function safeUp()
    {
        $this->addColumn('quote_service', 'value_basis_service', Schema::TYPE_DECIMAL);
    }

    public function safeDown()
    {
        $this->dropColumn('quote_service', 'value_basis_service');
    }
}
