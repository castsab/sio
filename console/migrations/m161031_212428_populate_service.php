<?php

use yii\db\Schema;
use yii\db\Migration;

class m161031_212428_populate_service extends Migration
{
    public function safeUp(){
        $this->execute("
            INSERT INTO `combo` VALUES ('2','Líneas de negocio','','1');"
        );
    
        $this->execute("
            INSERT INTO `option` (`id_combo`,`code`,`name`,`description`,`order`,`state`) VALUES ('2', '1', 'Desarrollo web', null, '1', '1');
            INSERT INTO `option` (`id_combo`,`code`,`name`,`description`,`order`,`state`) VALUES ('2', '2', 'Diseño gráfico', null, '2', '1');"
        );
    }

    public function safeDown(){
        $this->execute('DELETE FROM combo where id=2');
        $this->execute('DELETE FROM option where id_combo=2');
    }
}
