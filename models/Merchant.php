<?php

require_once 'CurrencyConverter.php';
require_once 'TransactionTable.php';

/**
 * Class Merchant 
 */
class Merchant
{

	/**
     * Return the transactions of the $merchantID from the file.
     * 
     * @param integer $merchantID
     * @param string $filename
     * @return array
     */

    public function getTransactions( $merchantID ,$filename  )
    {
        $result = array();
         
        $transactionTable = new TransactionTable();
          
        //Get the transaction data from the file 
        $transactionTableData = $transactionTable->transaction_data( $filename );
        
        foreach ( $transactionTableData as $transaction )     
        {
        	if(isset($transaction['value'])){
        		
        		$CurrencyConverter = new CurrencyConverter( );
        		
        		$amount = $transaction['value'];
        		
        		//$result  array only for the given merchant ID
        		if ( $transaction['merchant'] == $merchantID )
        		{
        			//Covert the transaction value to GBP
        	    	$transaction['value']=  $CurrencyConverter->convert( $amount );
	                $result[] = $transaction;
	            }
        	}
     
        }
        	
       return $result;
    }
}