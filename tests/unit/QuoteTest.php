<?php

require (__DIR__ .'../../../backend/models/JHelper.php');

use backend\models\JHelper;

class QuoteTest extends \PHPUnit_Framework_TestCase
{
    public $jHelper;
    
    public function setUp() {
       $this->jHelper = new JHelper(); 
    }
    
    public function testMe()
    {
        $this->assertEquals(1, 1);
    }
    
    public function testValidateAnValorWithIva(){
        $value = 150000;
        $jHelper = new JHelper();
        $actual = $this->jHelper->getValueQuoteWithIva($value);
        $expected = 178500;
        $this->assertEquals($expected, $actual);
    }
    
    public function testValidateAnValueDiscount(){
        $discount = 5;
        $value = 100000;
        $actual = $this->jHelper->getValueQuoteWithDiscount($value,$discount);
        $expected = 105000;
        $this->assertEquals($expected, $actual);
    }
    
    public function testValidateIvaQuote(){
        $value = 100000;
        $actual = $this->jHelper->getIvaQuote($value);
        $expected = 19000;
        $this->assertEquals($expected, $actual);
    }
}
