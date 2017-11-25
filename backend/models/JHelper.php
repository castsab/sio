<?php

namespace backend\models;

use Yii;

class JHelper {
    
    public function getValueQuoteWithIva($value) {
        return ($value + (($value * 19 / 100)));
    }
    
    public function getValueFormat($value){
        return str_replace(',', '.', number_format(trim(($value))));
    }
    
    public function getValueQuoteWithDiscount($value,$discount=0){
        return ($value - ($value * $discount / 100));
    }
    
    public function getIvaQuote($value){
        return (($value * 19) / 100);
    }
    
    public static function getDateFormat($timestamp){
        return date("d-m-Y",$timestamp);
    }
    
    public static function getDateFormatAudit($timestamp){
        return date("d-m-Y h:i",$timestamp);
    }
    
    public function getQuoteDiscount($value,$discount=0){
        //echo '-->'.$value.'<---';
        return (($value * $discount)/100);
    }
    
    public static function getValueTextStatus($status){
        return ($status == 1)?'Activo':'Inactivo';
    }
    
    public static function getValueTextQuotePersonNatural($quote_person_natural){
        return ($quote_person_natural == 1)?'Si':'No';
    }
    
    public static function getValueAdministrativeExpensesQuote($value,$administrativeExpenses=0){
        return ($value * $administrativeExpenses / 100);
    }
    
    public function redondear($valor) {
        $valor = intval($valor);
        $n = round($valor, -2);
        return $n < $valor ? $n + 100 : $n;
    }
    
    public function getValueWorkingHours(){
       return $this->redondear(((Yii::$app->params['VBMA'] * 5) * 12 / 2000)); 
    }
    
    public function getValueBasisServiceMoreCommission($value){
        $commission = (($value * Yii::$app->params['commission'])/100);
        $administrative = (($value * Yii::$app->params['administrative'])/100);
        $valueBasisService = ($value + $commission + $administrative);
        return $valueBasisService;
    }
}
