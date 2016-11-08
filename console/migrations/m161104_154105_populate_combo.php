<?php

use yii\db\Schema;
use yii\db\Migration;

class m161104_154105_populate_combo extends Migration
{
    public function safeUp(){
        $this->execute("
            INSERT INTO `combo` VALUES ('5','Lista de si o no','','1');"
        );
    
        $this->execute("
            INSERT INTO `option` (`id_combo`,`code`,`name`,`description`,`order`,`state`) VALUES ('5', '1', 'Si', null, '1', '1');
            INSERT INTO `option` (`id_combo`,`code`,`name`,`description`,`order`,`state`) VALUES ('5', '2', 'No', null, '2', '1');"
        );
    }

    public function safeDown(){
        $this->execute('DELETE FROM `option` where `id_combo`=5;');
        $this->execute('DELETE FROM `combo` where `id`=5;');
    }
}
