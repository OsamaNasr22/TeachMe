
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 session_start();
if(!isset($_SESSION['user'])){
    include 'registerController.php';
    die();
} else {
 
    if(@$_GET['page']){
         $url='site/'.$_GET['page'].".php";
    if(file_exists($url)){
        include $url;
    } 
    }else {  
        include 'includes/ini.php';
       
        include SITE.'header.php';
       
        include SITE.'slider.php';
        echo '<div class="container-fluid">';
        echo '<div class="content">';
        include SITE.'sidebar.php';
        include SITE.'body.php';
        echo '</div>';
        echo '</div>';
        include SITE.'footer.php';  
    }
    }
?>

