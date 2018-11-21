
<div class="slider">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
     <ol class="carousel-indicators">
<?php
include '../includes/ini.php';
                include '../includes/autoload.php';
    $ob=new Display("banners");
$bannersData=$ob->displayBytype('slider');

for($i=0;$i<count($bannersData);$i++){
      
    echo "<li  data-target='#myCarousel' data-slide-to='$i'></li>";

}
?>
     </ol>
     <div class="carousel-inner" role="listbox">
        <?php
        for($i=0;$i<count($bannersData);$i++){
            echo "
 <div class='item'>
    <img class='img-responsive' src='app/{$bannersData[$i]['bannerUrl']}' alt='image wep'/>
    </div>               
";
        }
        ?>
      
    </div>
</div>
   
  </div>

<!--
<div id="myCarousel" class="carousel slide" data-ride="carousel">
   Indicators 
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

   Wrapper for slides 
  <div class="carousel-inner" role="listbox">
    <div class="item active">
        <img src="http://placehold.it/1024x300"  alt="Chania">
    </div>

    <div class="item">
        <img src="http://placehold.it/1024x300" alt="Flower">
    </div>
  </div>

   Left and right controls 
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>-->
       