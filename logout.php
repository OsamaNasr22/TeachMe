<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
if(isset($_SESSION['user'])){
session_destroy();
header("Location:http://localhost/dashboard/phpProject/TeachMe/");
exit();
} else {
    echo 'error';    
}

