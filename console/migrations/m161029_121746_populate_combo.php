<?php

use yii\db\Migration;

class m161029_121746_populate_combo extends Migration
{
    public function safeUp(){
        $this->execute("
            INSERT INTO `combo` VALUES ('1','Estado de los registros en la base','','1');"
        );
    
        $this->execute("
            INSERT INTO `option` VALUES ('1', '1', '1', 'Activo', null, '1', '1');
            INSERT INTO `option` VALUES ('2', '1', '0', 'Inactivo', null, '2', '1');"
        );
    }

    public function safeDown(){
        $this->execute('DELETE FROM combo where id=1');
        $this->execute('DELETE FROM option where id_combo=1');
    }
}
