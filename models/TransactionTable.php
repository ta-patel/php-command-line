<?php
/**
 * Class TransactionTable. Read the data from the CSV file.
 *
 */
class TransactionTable 
{
    /**
     * Return the data from $filename.
     *
     * @param string $filename
     * @param string $delimiter
     * @return array
     */
	
	public function csv_to_array($filename='', $delimiter=';')
		{
			if(!file_exists($filename) || !is_readable($filename))
				return FALSE;
			
			$header = NULL;
			$data = array();
			if (($handle = fopen($filename, 'r')) !== FALSE)
			{
				while (($row = fgetcsv($handle, 1000, $delimiter)) !== FALSE)
				{
					if(!$header)
						$header = $row;
					else
						$data[] = array_combine($header, $row);
				}
				fclose($handle);
			}
			return $data;
		}

	/**
     * Return the data from $filename.
     *
     * @param string $filename
     * @return array
     */
		
    public function transaction_data( $filename )
    {
        if ( !is_file( $filename) )
        {
            throw new Exception( 'Error with the filename.' );
        }

        $table = $this->csv_to_array($filename);
		
        return $table;
    }
    
   
    
}