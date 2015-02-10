<?php

/**
 * Dummy web service returning random exchange rates
 *
 */
class CurrencyWebservice 
{
    

    /**
     * Return the exchange rate from $currencyFrom to $currencyTo.
     *
     * @param float $convert_amount
     * @param string $get_currency
     * @param string $currency_convert
     * @return string
     */
    

    public function getExchangeRate( $convert_amount, $get_currency, $currency_convert)
    {
    	// Based on the different currency value changes using random function 
    	//to need to convert the amount in the GBP.
    	
    	if($get_currency == 'GBP'){
    		$exchange = $convert_amount;
    	}
    	elseif($get_currency == 'USD'){    	
       		 $exchange = round(rand(10000 , 99999)  / $convert_amount,2);   	
    	}
        elseif($get_currency == 'EUR'){    	
    	    $exchange = round(rand(1000 , 9999)  / $convert_amount ,2);   	
    	}else{
    		$exchange = '';
    	}
        return '£'.$exchange;
    }

    
}