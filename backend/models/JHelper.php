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
        return ($value + ($value * $discount / 100));
    }
    
    public function getIvaQuote($value){
        return ($value * 19 / 100);
    }
    
    public function getDateFormat($timestamp){
        return date("d-m-Y",$timestamp);
    }
    
}
