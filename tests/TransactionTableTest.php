<?php

require_once dirname(dirname( __FILE__ )). '/models/TransactionTable.php';

/**
 * Test the class TransactionTable.
 */
class TransactionTableTest extends PHPUnit_Framework_TestCase
{
    /**
     * Object TransactionTable to test.
     */
    protected $obj;

    /**
     * Construct the object TransactionTable to test.
     */
    public function setUp()
    {
        $this->obj = new TransactionTable();
    }

    /**
     * Test the method transaction_data.
     * To check if file exists or not.
     */
    public function test_transaction_datafile_exists()
    {
        $filename = $_SERVER['DOCUMENT_ROOT'] . '/tests/models/nosuchfile.csv';
        
        $this->assertFileExists( $filename );
    }

    
}
