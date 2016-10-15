<?php

use yii\db\Migration;

class m161015_215700_rbac_init extends Migration
{
    public function safeUp(){
        $sql = "INSERT INTO `auth_item` VALUES ('root', '1', null, null, null, '1446051897', '1446219470');";
        $this->execute($sql);
    }

    public function safeDown(){
        $sql = "delete from auth_item";
        $this->execute($sql);
    }
}
