<?php

class connect    {
    protected $cxn;
     function connectToDb()
    {
        // require_once 'database.php';
        $this->cxn = new Database("localhost","root","","teachme");
         
    }
    function close()
    {
        $this->cxn->close();
    }
}
