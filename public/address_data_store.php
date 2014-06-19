<?

require('filestore.php');


// TODO: require Filestore class

class AddressDataStore extends Filestore {

    // TODO: Remove this, now using parent!
  

    // TODO: Remove this, now using parent!
    function __construct($filename) 

    {
        //lowercase filename
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

// class AddressDataStore {

// public $new_address = [];    
// public $filename = 'adr_bk.csv';


//     public function __construct($filename ='adr_bk.csv') 
//     {
//        $this->filename = $filename;
//     }

    
//     public function read_address_book()
//     {
//          $items = [];
//           $handle = fopen($this->filename, 'r');
//          while(!feof($handle)) {
//           $row = fgetcsv($handle);
//             if(is_array($row)) {
//             $items[] = $row;

//             }
//          }
//          fclose($handle);
//          return ($items);
      
//     }

//     public function write_address_book($bigArray) 
//     {
//         $handle = fopen($this->filename, 'w');
//         foreach ($bigArray as $fields) {
//             fputcsv($handle, $fields);
//        }
//         fclose($handle);
//     }
// }
?>