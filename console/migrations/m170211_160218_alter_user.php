<?php

use yii\db\Migration;
use yii\db\Schema;

class m170211_160218_alter_user extends Migration
{
    public function up()
    {
        $this->addColumn('user', 'document', Schema::TYPE_BIGINT);
    }

    public function down()
    {
        echo "m170211_160218_alter_user cannot be reverted.\n";
        return false;
    }
}
