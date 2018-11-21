<?php

class Database 
{
    private $host;
    private $user;
    private $password;
    private $database;
    
    function __construct($host,$user,$password,$database)
    {
        
        
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->database = $database; 
        
        $this->connect();
    }
    
    private function connect()
    {
        $link=mysqli_connect($this->host,$this->user, $this->password, $this->database);
     
        // connect to the server
        if(!$link)
            throw new Exception("Error: not connected to the server.");        
        // select the database
        if(!mysqli_select_db($link, $this->database))
            throw new Exception("Erro: No database selected");                
    }
    
    function close()
    {
         $link=mysqli_connect($this->host,$this->user, $this->password, $this->database);
        mysqli_close($link);
    }
}

?>
