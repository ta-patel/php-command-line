<?php

require_once dirname(dirname( __FILE__ )). '/models/Merchant.php';

/**
 * Test the class Merchant.
 */
class MerchantTest extends PHPUnit_Framework_TestCase
{
	 protected $obj;

    /**
     * Construct the object Merchant to test.
     */
    public function setUp()
    {
        $this->obj = new Merchant();
    }	
   
    
    /**
     * Test the method "getTransactions" 
     * check if result is not null
     */
    
    public function test_checkifmerchantidexists(){
    	
    	$filename = dirname(dirname( __FILE__ )).'/data.csv';
    	$merchantID = '1';
    	$result = $this->obj->getTransactions($merchantID,$filename);
    	$this->assertNotNull($result);
    }

}
