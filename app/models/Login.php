<?php

class Login extends connect {
    private $username;
    private $password; 
    private $tablename;
            function __construct($tablename,$data)
    {
        if(is_array($data)){
           $this->setdata($tablename,$data);
       } else {
           throw new Exception("Error this is not array");
       }
        // connect DB
        $this->connectToDb();
        // get Data
        $this->getData();
        $this->close();
    }
    
    private function setData($tablename,$data)
    {
        $this->tablename = $tablename;
        $this->username = $data['username'];
        $this->password = $data['password'];
    }
    function getData()
    {
        $link= mysqli_connect("localhost","root","","teachme");
        $query = "SELECT * FROM `$this->tablename` WHERE `username` = '$this->username' AND `password` = '$this->password'";
        $sql=mysqli_query($link,$query);
        
        if(mysqli_num_rows($sql)>0)
        {
            return TRUE;
        }
        else
        {
             throw new Exception("<script type='text/javascript'>alert('Username or password is invalid, please try again.');history.back();</script>");
        }
        
    }
 
}

?>
