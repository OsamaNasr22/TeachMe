
<?php
include '../includes/ini.php';
 include '../includes/functions.php';
 ?>
<!DOCTYPE html>
<html >
  <head>
      <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php echo $displaymain['site_desc'];?>">
    <meta name="tags" content="<?php echo $displaymain['site_tags'];?>">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?php echo $displaymain['site_name'];?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo SITE;?>css/bootstrap.css" rel="stylesheet">

    

    <!-- Custom styles for this template -->
    <link href="<?php echo SITE;?>css/style.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo SITE;?>js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
<!--start nav bar-->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://localhost/dashboard/phpProject/TeachMe/"><?php echo $displaymain['site_name'];?></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse navbar-right">
          <ul class="nav navbar-nav">
            <li  class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="logout.php">Logout</a></li>
            
          </ul>
        </div><!--/.nav-collapse -->
      
      </div>
    </nav>
<!--end navbar -->
