<?php

namespace backend\models;

class JHelper {
    
    public function getValueQuoteWithIva($value) {
        return ($value + ($value * 19 / 100));
    }
    
    public function getValueFormat($value){
        return str_replace(',', '.', number_format(trim(($value))));
    }
    
    public function getValueQuoteWithDiscount($value,$discount=0){
        return ($value - ($value * $discount / 100));
    }
    
    public function getIvaQuote($value){
        return ($value * 19 / 100);
    }
    
    public static function getDateFormat($timestamp){
        return date("d-m-Y",$timestamp);
    }
    
    public static function getDateFormatAudit($timestamp){
        return date("d-m-Y h:i",$timestamp);
    }
    
    public function getQuoteDiscount($value,$discount=0){
        return ($value * $discount / 100);
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
}
