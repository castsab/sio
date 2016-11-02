<?php

use yii\db\Schema;
use yii\db\Migration;

class m161101_210820_populate_combo extends Migration
{
    public function safeUp(){
        $this->execute("
            INSERT INTO `combo` VALUES ('3','Tipos de documentos','','1');"
        );
    
        $this->execute("
            INSERT INTO `option` (`id_combo`,`code`,`name`,`description`,`order`,`state`) VALUES ('3', '1', 'Cedula de Ciudadanía', null, '1', '1');
            INSERT INTO `option` (`id_combo`,`code`,`name`,`description`,`order`,`state`) VALUES ('3', '2', 'Nit', null, '2', '1');"
        );
    }

    public function safeDown(){
        $this->execute('DELETE FROM `option` where `id_combo`=3');
        $this->execute('DELETE FROM `combo` where `id`=3');
    }
}
