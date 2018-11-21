<?php


class Display extends connect {
    private $tablename;
    private $data;
            function __construct($tablename) {
        $this->tablename=$tablename;
        $this->connectToDb();
    }
    function displayAllRecord(){
        $link= mysqli_connect("localhost", "root", "", "teachme");
        $query="SELECT * FROM $this->tablename ORDER BY id DESC";
        mysqli_query($link, "SET NAMES 'utf8'");
        $sql= mysqli_query($link, $query);
        if(!$sql){
            throw  new Exception("Error:the query is not work");
        } else {
        $num= mysqli_num_rows($sql);
        if($num>0){
            
            for($i=0; $i<$num ;$i++)
            {
                $data[$i]= mysqli_fetch_array($sql);
            }
            return $data;
            
        }
        }
    }
    function displayAllRecordActive($column){
        $link= mysqli_connect("localhost", "root", "", "teachme");
        $query="SELECT * FROM $this->tablename WHERE `$column`='active' ORDER BY id DESC";
        mysqli_query($link, "SET NAMES 'utf8'");
        $sql= mysqli_query($link, $query);
        if(!$sql){
            throw  new Exception("Error:the query is not work");
        } else {
        $num= mysqli_num_rows($sql);
        if($num>0){
            
            for($i=0; $i<$num ;$i++)
            {
                $data[$i]= mysqli_fetch_array($sql);
            }
            return $data;
            
        }
        }
    }
    
    
    function displayLastRecord(){
            $link= mysqli_connect("localhost", "root", "", "teachme");
            $query="SELECT * FROM $this->tablename ORDER BY `id` DESC LIMIT 1";
            mysqli_query($link, "SET NAMES 'utf8'");
            $sql= mysqli_query($link, $query);
            if(!$sql){
                throw new Exception("Error:the querry is not work");
            }else{
                $num= mysqli_num_rows($sql);
                while ($num>0){
                    $this->data= mysqli_fetch_array($sql);
                    $num--;

                }
                return $this->data;
            }
        }
        function displayRecordById($id){
            $id= intval($id);
            $link= mysqli_connect("localhost", "root", "", "teachme");
            $query="SELECT * FROM $this->tablename WHERE `id`=$id";
             mysqli_query($link, "SET NAMES 'utf8'");
            $sql= mysqli_query($link, $query);
           
            if (!$sql){
                throw new Exception("error:query is not work");
            } else {
                $num= mysqli_num_rows($sql);
                while ($num>0){
                    $this->data= mysqli_fetch_array($sql);
                    $num--;
                }
                return $this->data;
            }
        }
         function displayBycolumnname($id,$column="id",$status){
            $id= intval($id);
            $link= mysqli_connect("localhost", "root", "", "teachme");
            $query="SELECT * FROM $this->tablename WHERE `$column`=$id AND `$status`='active'  ORDER BY `id` DESC ";
            mysqli_query($link, "SET NAMES 'utf8'");
            $sql= mysqli_query($link, $query);
            if (!$sql){
                throw new Exception("error:query is not work");
            } else {
                $num= mysqli_num_rows($sql);
                if($num>0){
            
            for($i=0; $i<$num ;$i++)
            {
                $data[$i]= mysqli_fetch_array($sql);
            }
            return $data;
            
        }
            }
        }
        function displayBytype($type){
            $link= mysqli_connect("localhost", "root", "", "teachme");
            $query="SELECT * FROM $this->tablename WHERE `status`='active' AND `type`= '$type' ";
            mysqli_query($link, "SET NAMES 'utf8'");
            $sql= mysqli_query($link, $query);
            if (!$sql){
                throw new Exception("error:query is not work");
            } else {
                    $num= mysqli_num_rows($sql);
                            if($num>0){

                                for($i=0; $i<$num ;$i++)
                                {
                                    $data[$i]= mysqli_fetch_array($sql);
                                }
                                return $data;

                            }
                    }
    }
}
