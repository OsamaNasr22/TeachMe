<footer class="footer">
    <?php 
    include '../includes/ini.php';
include '../includes/functions.php';
?>

      <div class="container-fluid">
          <p class="text-muted">Copyright &COPY; 2016 Your Tempelete name teachme</p>
          <div class="social">
              <ul>
                  <a href="<?php echo $displaymain['fb'];?>" target="_blank"><li><img src="site/social/facebook (3).png"></li></a>
              <a href="<?php echo $displaymain['google'];?>" target="_blank"><li><img src="site/social/google-plus.png"></li></a>
              <a href="<?php echo $displaymain['insta'];?>" target="_blank"><li><img src="site/social/instagram.png"></li></a>
              <a href="<?php echo $displaymain['tw'];?>" target="_blank"><li><img src="site/social/twitter.png"></li></a>
              <a href="<?php echo $displaymain['sound'];?>" target="_blank"><li><img src="site/social/soundcloud.png"></li></a>
          </ul>
          </div>
          
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo SITE;?>js/jquery-1.11.3.min.js"></script>
    <script src="<?php echo SITE;?>js/bootstrap.min.js"></script>
    <script src="<?php echo SITE;?>js/jsslider.js"
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo SITE;?>js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
