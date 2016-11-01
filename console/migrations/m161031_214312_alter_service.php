<?php

use yii\db\Schema;
use yii\db\Migration;

class m161031_214312_alter_service extends Migration
{
    public function safeUp()
    {
        $this->dropForeignKey('fk_service_line_business', 'service');
        $this->dropColumn('service', 'id_line_business');
    }

    public function safeDown()
    {
        $this->addColumn('service', 'id_line_business', Schema::TYPE_INTEGER.' not null');
        $this->addForeignKey('fk_service_line_business', 'service', 'id_line_business', 'line_business', 'id');
    }
}
