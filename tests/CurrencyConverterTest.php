<?php

require_once dirname(dirname( __FILE__ )). '/models/CurrencyConverter.php';

class CurrencyConverterTest extends PHPUnit_Framework_TestCase {
	
	/**
     * Object CurrencyConverter to test.
     */
    protected $obj;

    /**
     * Construct the object CurrencyConverter to test.
     */
    public function setUp()
    {
        $this->obj = new CurrencyConverter();
    }
	

	/**
     * Test the method "convert", with the same currency.
     */
    public function testGBPascurrency()
    {
        $get_currency = 'GBP';
        $currency_convert = 'GBP';
        $convert_amount =  '£50';
        
        $result = $this->obj->convert($convert_amount, $get_currency, $currency_convert  );
        
        $this->assertEquals($convert_amount, $result);
        
    }
    
    
}

