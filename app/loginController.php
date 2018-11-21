<?php

include '../includes/ini.php';
include '../includes/autoload.php';
if(isset($_POST['submit']) AND $_POST['submit'] == "LogIn" )
{
    // Login
    try {
        $validAdmin=new Validation();
         $data['username']  = $validAdmin->sanitizeString($_POST['username'],'username');
        $data['password']  = $_POST['password'];
        $rulesLogin=array(
                "username"=>"validateEmpty|validateString",
                "password"=>"validateEmpty"
            );
        $validAdmin->validate($data, $rulesLogin);
    } catch (Exception $ex) {
        echo $ex->getMessage();
        die();
    }
       
        
        try
        {
           // include '../models/main.php';
            //include '../models/login.php';
            $login = new Login("admins",$data);
            
            if($login == TRUE)
            {
                session_start();
                $_SESSION['admin'] = $data['username'];
                header('Location:index.php');
                exit();
            }
        }
        catch (Exception $exc)
        {
            echo $exc->getMessage();
        }
        
    
   
} else {
    include 'views/Adminlogin.php';    
}



