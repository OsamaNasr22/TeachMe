<?php 
class Delete extends connect {
    private $tablename;
    public function __construct($tablename) {
        $this->tablename=$tablename;
        $this->connectToDb();
    }
    function deleteRecordById($id){
        $link= mysqli_connect("localhost", "root", "", "teachme");
        $query="DELETE FROM $this->tablename WHERE `id`=$id";
        $sql= mysqli_query($link, $query);
        if(!$sql){
            throw new Exception("Error:not deleted");
        } else {
            return TRUE;    
        }
    }
}
