<?php

class Filestore {
    public $is_csv = FALSE;

    public $filename = '';


    function __construct($filename = '') {

         $this->filename = $filename;
         if (substr($this->filename, -3) == 'csv') {
            $this->is_csv = true;
         }
    }

    public function read() {

        if ($this->is_csv) {
            return $this->read_csv();
        } else {
            return $this->read_lines();
        }
    }

    public function write($array) {

        if ($this->is_csv) {
            $this->write_csv($array);
        } else {
           $this->write_lines($array);
        }

    }
     
        
     
    private function read_lines()
    {
        if(filesize($this->filename) > 0) {
            $handle = fopen($this->filename, 'r');
            $contents = trim(fread($handle, filesize($this->filename)));
            $contents_array = explode("\n", $contents);
            fclose($handle);

            return $contents_array;
        } 
    }


    private function write_lines($array)
    {
        $handle = fopen($this->filename, 'w');
        $string = implode("\n", $array);
        $contents = fwrite($handle, $string);
        fclose($handle);
    }

    private function read_csv()
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

    private function write_csv($array)
    {
        $handle = fopen($this->filename, 'w');
        foreach ($array as $fields) {
            fputcsv($handle, $fields);
        }
            fclose($handle);
        }

    }