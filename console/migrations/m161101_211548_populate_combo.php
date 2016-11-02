<?php

use yii\db\Schema;
use yii\db\Migration;

class m161101_211548_populate_combo extends Migration
{
    public function safeUp(){
        $this->execute("
            INSERT INTO `combo` VALUES ('4','Tipos de cliente','','1');"
        );
    
        $this->execute("
            INSERT INTO `option` (`id_combo`,`code`,`name`,`description`,`order`,`state`) VALUES ('4', '1', 'Persona natural', null, '1', '1');
            INSERT INTO `option` (`id_combo`,`code`,`name`,`description`,`order`,`state`) VALUES ('4', '2', 'Establecimiento comercial', null, '2', '1');
            INSERT INTO `option` (`id_combo`,`code`,`name`,`description`,`order`,`state`) VALUES ('4', '3', 'Apoyo a tercero', null, '2', '1');"
        );
    }

    public function safeDown(){
        $this->execute('DELETE FROM `option` where `id_combo`=4;');
        $this->execute('DELETE FROM `combo` where `id`=4;');
    }
}
