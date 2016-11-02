<?php

use yii\db\Schema;
use yii\db\Migration;

class m161101_213108_alter_client extends Migration
{
    public function safeUp()
    {
        $this->dropColumn('client', 'first_name');
        $this->dropColumn('client', 'last_name');
        $this->dropColumn('client', 'office_address');
        $this->dropColumn('client', 'email');
        $this->dropColumn('client', 'cell_phone');
        $this->dropColumn('client', 'local_phone');
        $this->dropColumn('client', 'extension');
        $this->dropColumn('client', 'contact_project');
        $this->dropColumn('client', 'contact_business');
    }

    public function safeDown()
    {
        $this->addColumn('client', 'first_name', Schema::TYPE_STRING . '(100)');
        $this->addColumn('client', 'last_name', Schema::TYPE_STRING . '(100)');
        $this->addColumn('client', 'office_address', Schema::TYPE_STRING . '(100)');
        $this->addColumn('client', 'email', Schema::TYPE_STRING . '(100)');
        $this->addColumn('client', 'cell_phone', Schema::TYPE_INTEGER.'(10)');
        $this->addColumn('client', 'local_phone', Schema::local_phone . '(10)');
        $this->addColumn('client', 'extension', Schema::TYPE_INTEGER.'(5)');
        $this->addColumn('client', 'contact_project', Schema::TYPE_SMALLINT . '(2) not null');
        $this->addColumn('client', 'contact_business', Schema::TYPE_SMALLINT . '(2) not null');
    }

}
