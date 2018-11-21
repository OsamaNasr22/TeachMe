<h2 class="sub-header">Users</h2>
<?php
$pageName='users';
include '../includes/ini.php';
include '../includes/autoload.php';

$ds=new Display('users');
$DataUsers=$ds->displayAllRecord();
include 'views/users.php';