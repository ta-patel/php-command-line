<?php 
include 'config.php';

require_once BASE_PATH . '/models/Merchant.php';

/**
 * fetch the array of arguments passed to scripts.
*  Get the merchant ID from the arguement
*
*/

$argv = $_SERVER[ 'argv' ];

$merchantID = (int) $argv[1];


/**
 *  our file contains merchant ID 1,2
*  throw Exception for other merchant ID passed.
*/

if (in_array($merchantID,array(1,2))){
	
		$filename = '../data.csv';
		
		$merchant = new Merchant();		
		$transactions = $merchant->getTransactions( $merchantID , $filename );
		
		echo   'MERCHANT ID'. '| '.'DATE'. '| '. 'CURRENCY' . PHP_EOL; 
		foreach ( $transactions as $transaction )
		{	       
		  echo   $transaction['merchant']. '| '.$transaction['date']. '| '. $transaction['value'] . PHP_EOL; 		
		}
	
}
else{
	
		throw new Exception( ' Merchant ID not found' );
	
}
