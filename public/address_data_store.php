<?

require('filestore.php');


class AddressDataStore extends Filestore {

  
    function __construct($filename) 

    {
        
        parent::__construct($filename);

    }

    function read_address_book()
    {
        $this->read_csv();
    }

    function write_address_book($addresses_array) 
    {
        $this->write_csv();
    }

}

