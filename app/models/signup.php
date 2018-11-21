<?php


class signup extends connect {
   private $name;
   private $username;
   private $email;
   private $password;
   
   function __construct($data) {
       //set data
       if(is_array($data)){
           $this->setdata($data);
       } else {
           throw new Exception("Error this is not array");
       }
       //connect to database
       $this->connectToDb();
       
       //insert data
       $this->insert();
       $this->close();
       
   }
   
   private function setdata($data){
       $this->name=$data['name'];
       $this->username=$data['username'];
       $this->email=$data['email'];
       $this->password=$data['password'];
       
   }
   function insert(){
       $link= mysqli_connect("localhost", "root", "", "teachme");
       $query="INSERT INTO `users`(`name`,`username`, `password`, `email`) VALUES ('$this->name','$this->username','$this->password','$this->email')";
       $sql= mysqli_query($link, $query);
       if($sql){
           return TRUE;
       } else {
           throw new Exception("Error in sign up ,pleast try again");
       }
       
   }
}
