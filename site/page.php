<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'includes/ini.php';
 include 'includes/autoload.php';
 
include SITE.'header.php';
echo '<div class="container-fluid">';
echo '<div class="content">';
include SITE.'sidebar.php';

$id=$_GET['id'];
$ds=new Display('pages');
$page=$ds->displayRecordById($id);
?>

<div class="media" style="direction: rtl">
  
    <div class="media-left" >
      <a href="#">
          <img class="media-object" src='app/<?php echo$page['p_image'];?> 'width='200' height='200' alt="...">
      </a>
    </div>
    <div class="media-body">
      <h1 class="media-heading"><?php echo $page['p_name'];?></h1>
      <p><?php echo $page['p_content'];?></p>
    </div>
  </div>
</div>
</div>
<?php
include SITE.'footer.php';
?>