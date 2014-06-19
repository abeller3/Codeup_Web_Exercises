<<?php

class Filestore {

    public $filename = '';


    function __construct($filename = '') 
    {
         $this->filename = $filename;
    }
     /**
     * Returns array of lines in $this->filename
     */
        
     
    function read_lines()
    {
        if(filesize($this->filename) > 0) {
            $handle = fopen($this->filename, 'r');
            $contents = trim(fread($handle, filesize($this->filename)));
            $contents_array = explode("\n", $contents);
            fclose($handle);

        return $contents_array;

        } 
    }

    /**
     * Writes each element in $array to a new line in $this->filename
     */
    function write_lines($array)
    {
        $handle = fopen($this->filename, 'w');
        $string = implode("\n", $array);
        $contents = fwrite($handle, $string);
        fclose($handle);

    }

    /**
     * Reads contents of csv $this->filename, returns an array
     */
    function read_csv()
    {
         $items = [];
          $handle = fopen($this->filename, 'r');
          while(!feof($handle)) {
          $row = fgetcsv($handle);
            if(is_array($row)) {
            $items[] = $row;

            }
         }
         fclose($handle);
         return ($items);

    }

    /**
     * Writes contents of $array to csv $this->filename
     */
    function write_csv($array)
    {
        $handle = fopen($this->filename, 'w');
        foreach ($array as $fields) {
            fputcsv($handle, $fields);
       }
        fclose($handle);

    }

}