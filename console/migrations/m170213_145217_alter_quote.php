<?php

use yii\db\Migration;
use yii\db\Schema;

class m170213_145217_alter_quote extends Migration
{
    public function up()
    {
        $this->addColumn('quote', 'document_person', Schema::TYPE_BIGINT);
        $this->addColumn('quote', 'quote_person_natural', Schema::TYPE_SMALLINT.'(2) default 0');
        
    }

    public function down()
    {
        $this->dropColumn('quote', 'document_person');
        $this->dropColumn('quote', 'quote_person_natural');
    }

}
