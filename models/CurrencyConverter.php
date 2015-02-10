<?php

require_once 'CurrencyWebservice.php';

/**
 * Use CurrencyWebservice to convert the value to GBP.
 *
 */
class CurrencyConverter 
{
      
	/**
     * Get the amount without currency from the $amount
     * 
     * @param float $amount
     *
     * @return float
     */
  
	public function getamount($amount){
		
				if(strstr($amount, '£'))
		        {
		            $amt = str_replace('£', '', $amount);

		        }
		
		        else if(strstr($amount, '$'))
		        {
		            $amt = str_replace('$', '', $amount);
	
		        }
		         
			   else if(strstr($amount, '€'))
		        {
		            $amt = str_replace('€', '', $amount);
		
		        }
		        else{
		        	$amt = '';
		        }
		        
		        return $amt;
		
	}
	
	 /**
     * Get the currency from the $amount
     * 
     * @param float $amount
     *
     * @return string
     */

	public function getcurrency($amount){
		
				if(strstr($amount, '£'))
		        {
		            $currency = 'GBP';
		        }
		
		        else if(strstr($amount, '$'))
		        {
		             $currency = 'USD';
		        }
		        
		        else if(strstr($amount, '€'))
	            {
	            	 $currency = 'EUR';
	            }
		        else{
		        	$currency = '';
		        }
		        
		        return $currency;
		
	}
	

	  /**
     * Converts the $amount from the any currency to GBP
     * 
     * @param float $amount
     *
     * @return float
     */
  
    
    public function convert( $amount)
    {  	

    	$convert_amount = $this->getamount($amount);
    	
    	$get_currency = $this->getcurrency($amount);
    	
    	$currency_convert = 'GBP';
    	  	
    	$currencyWebservice = new CurrencyWebservice();
        
        $exchange = $currencyWebservice->getExchangeRate( $convert_amount, $get_currency, $currency_convert );
        
        return $exchange;
    }
}