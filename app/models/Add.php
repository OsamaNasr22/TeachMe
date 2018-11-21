<?php

class Add extends connect {
    private $data;
    private $tablename;
    
    function __construct($data,$tablename) {
        if(is_array($data)){
            $this->data=$data;
            $this->tablename=$tablename;
        } else {
        throw new Exception("Error this is not array");    
        }
        $this->connectToDb();
        $this->Add($this->data);
        $this->close();
    }
    function Add($data){
        
        $link= mysqli_connect("localhost", "root", "", "teachme");
        foreach ($data as $key => $value) {
            $keydata[]  =$key;
            $valuedata[]=$value;
        }
        $keyString      = implode($keydata, ",");
        $valueString    ='"'.implode($valuedata, '","').'"';
        $query          ="INSERT INTO $this->tablename ($keyString) VALUES ($valueString)";
          mysqli_query($link, "SET NAMES 'utf8'");
        if(mysqli_query($link,$query)){
            return TRUE;
        } else {
             return FALSE;
            
        }
        
    }
}
