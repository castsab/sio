<?php

use yii\db\Schema;
use yii\db\Migration;

class m161102_134357_populate_department extends Migration
{
    public function safeUp(){
        $sql = "INSERT INTO `department` VALUES ('5', 'ANTIOQUIA', '10' , now(), now());
                INSERT INTO `department` VALUES ('8', 'ATLÁNTICO', '10' , now(), now());
                INSERT INTO `department` VALUES ('11', 'BOGOTÁ, D. C.', '10' , now(), now());
                INSERT INTO `department` VALUES ('13', 'BOLÍVAR', '10' , now(), now());
                INSERT INTO `department` VALUES ('15', 'BOYACÁ', '10' , now(), now());
                INSERT INTO `department` VALUES ('17', 'CALDAS', '10' , now(), now());
                INSERT INTO `department` VALUES ('18', 'CAQUETÁ', '10' , now(), now());
                INSERT INTO `department` VALUES ('19', 'CAUCA', '10' , now(), now());
                INSERT INTO `department` VALUES ('20', 'CESAR', '10' , now(), now());
                INSERT INTO `department` VALUES ('23', 'CÓRDOBA', '10' , now(), now());
                INSERT INTO `department` VALUES ('25', 'CUNDINAMARCA', '10' , now(), now());
                INSERT INTO `department` VALUES ('27', 'CHOCÓ', '10' , now(), now());
                INSERT INTO `department` VALUES ('41', 'HUILA', '10' , now(), now());
                INSERT INTO `department` VALUES ('44', 'LA GUAJIRA', '10' , now(), now());
                INSERT INTO `department` VALUES ('47', 'MAGDALENA', '10' , now(), now());
                INSERT INTO `department` VALUES ('50', 'META', '10' , now(), now());
                INSERT INTO `department` VALUES ('52', 'NARIÑO', '10' , now(), now());
                INSERT INTO `department` VALUES ('54', 'NORTE DE SANTANDER', '10' , now(), now());
                INSERT INTO `department` VALUES ('63', 'QUINDÍO', '10' , now(), now());
                INSERT INTO `department` VALUES ('66', 'RISARALDA', '10' , now(), now());
                INSERT INTO `department` VALUES ('68', 'SANTANDER', '10' , now(), now());
                INSERT INTO `department` VALUES ('70', 'SUCRE', '10' , now(), now());
                INSERT INTO `department` VALUES ('73', 'TOLIMA', '10' , now(), now());
                INSERT INTO `department` VALUES ('76', 'VALLE DEL CAUCA', '10' , now(), now());
                INSERT INTO `department` VALUES ('81', 'ARAUCA', '10' , now(), now());
                INSERT INTO `department` VALUES ('85', 'CASANARE', '10' , now(), now());
                INSERT INTO `department` VALUES ('86', 'PUTUMAYO', '10' , now(), now());
                INSERT INTO `department` VALUES ('88', 'ARCHIPIÉLAGO DE SAN ANDRÉS, PROVIDENCIA', '10' , now(), now());
                INSERT INTO `department` VALUES ('91', 'AMAZONAS', '10' , now(), now());
                INSERT INTO `department` VALUES ('94', 'GUAINÍA', '10' , now(), now());
                INSERT INTO `department` VALUES ('95', 'GUAVIARE', '10' , now(), now());
                INSERT INTO `department` VALUES ('97', 'VAUPÉS', '10' , now(), now());
                INSERT INTO `department` VALUES ('99', 'VICHADA', '10' , now(), now());";
        $this->execute($sql);
    }

    public function safeDown(){
        $this->execute('delete from `department`');
    }
}
