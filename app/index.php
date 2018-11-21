<?php

session_start();
if(!isset($_SESSION['admin'])){
    include 'loginController.php';
    die();
} else {
    include './views/appview.php';
}



