<?php

use yii\db\Migration;

class m161114_224934_populate_combo extends Migration
{
    public function safeUp(){
        $this->execute("
            INSERT INTO `combo` VALUES ('6','Estados de la cotización','','1');"
        );
    
        $this->execute("
            INSERT INTO `option` (`id_combo`,`code`,`name`,`description`,`order`,`state`) VALUES ('6', '1', 'Pendiente', null, '1', '1');
            INSERT INTO `option` (`id_combo`,`code`,`name`,`description`,`order`,`state`) VALUES ('6', '2', 'Aprovada', null, '2', '1');
            INSERT INTO `option` (`id_combo`,`code`,`name`,`description`,`order`,`state`) VALUES ('6', '3', 'Cerrada', null, '3', '1');"
        );
    }

    public function safeDown(){
        $this->execute('DELETE FROM `option` where `id_combo`=6;');
        $this->execute('DELETE FROM `combo` where `id`=6;');
    }
}
