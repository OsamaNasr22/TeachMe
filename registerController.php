<?php

include 'includes/ini.php';
include 'includes/autoload.php';
if($_POST)
{
    // Login
    if(isset($_POST['submit']) AND $_POST['submit'] == "LogIn" )
    {
        try {
            $validLogin=new Validation();
        $data['username'] = $validLogin->sanitizeString($_POST['username'],'username');
        $data['password'] = $_POST['password'];
        $rulesLogin=array(
                "username"=>"validateEmpty|validateString",
                "password"=>"validateEmpty"
            );
        $validLogin->validate($data, $rulesLogin);
        } catch (Exception $ex) {
            echo $ex->getMessage();
            die();
        }
        
        
        try
        {
           // include '../models/main.php';
            //include '../models/login.php';
            $login = new Login('users',$data);
            
            if($login == TRUE)
            {
               session_start();
                $_SESSION['user'] = $data['username'];
                
                header('Location:http://localhost/dashboard/phpProject/TeachMe/');
           exit();
            }
        }
        catch (Exception $exc)
        {
            echo $exc->getMessage();
        }
        
    }
    //signup
    else if(isset ($_POST['submit']) && $_POST['submit']=='SignUp'){
        
        try {
            $valid=new Validation();
                $data['name']       =$valid->sanitizeString($_POST['name'],'name');
                $data['username']   =$valid->sanitizeString($_POST['username'], 'username');
                $data['email']      =$valid->sanitizeEmail($_POST['email'],'email');
                $data['password']   =$_POST['password'];
            $rules=array(
                "name"=>"validateEmpty|validateString",
                "username"=>"validateEmpty|validateString",
                "email"=>"validateEmpty|validateEmail",
                "password"=>"validateEmpty",
            );
            $valid->validate($data, $rules);
        } catch (Exception $ex) {
            echo $ex->getMessage();
            die();
        }
       
        try {
           
           // include '../models/main.php';
            //include '../models/signup.php';
            $sign=new signup($data);
            if($sign==TRUE){
                 echo '<script type="text/javascript">alert("Successfully Sign Up Please Login");history.back();</script>';
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }
} else {
    include 'register.php';    
}



