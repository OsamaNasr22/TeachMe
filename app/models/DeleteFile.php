<?php

class DeleteFile {
    private $files;
    function __construct($files) {
        if(is_array($files)){
        $this->files=$files;
        }else{
            throw new Exception("this is not array");
        }
    }
    function delete(){
        $fileToDelete= $this->files;
        foreach ($fileToDelete as $value){
            if(file_exists($value)){
                unlink($value);
            }else{
                throw new Exception("This file is not found");
            } 
        }
        return TRUE;
    }
}
