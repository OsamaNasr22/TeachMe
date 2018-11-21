<?php


                class Update extends connect{
                    private $tablename;
                    private $data;
                    public function __construct($data,$tablename) {
                        if(is_array($data)){
                            $this->data=$data;
                            $this->tablename=$tablename;
                        } else {
                            throw new Exception("this is not array");
                        }
                    }
                    
                function editData($id){
                     $link= mysqli_connect("localhost", "root", "", "teachme");
                     $query ="UPDATE $this->tablename SET ";
                     foreach ($this->data as $key => $value) {
                         $query .= "`".$key."`="."'".$value."' ,";
                     }
                     $test="***";
                     $query .=$test;
                     $query= str_replace(",***"," ", $query);
                     $query .="WHERE `id`=$id";
                      mysqli_query($link, "SET NAMES 'utf8'");
                     $sql= mysqli_query($link, $query);
                     if(!$sql){
                         throw new Exception("Error:query is not work");
                     } else {
                         return true;    
                     }
                }
}
