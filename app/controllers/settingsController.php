<h2 class="sub-header">Main Settings</h2>
<?php
//<!--`site_name`, `site_desc`, `site_email`, `site_tags`, `site_homepanal`, `fb`, `tw`, `rss`, `yt`, `username` -->
include '../includes/ini.php';
include '../includes/autoload.php';
$pageName='settings';
        if (isset($_POST['submit'])&& $_POST['submit']=='Update'){
            try {
               $valid=new Validation();
               $rules=array(
                        "site_name"=>"validateEmpty|validateString",
                        "site_desc"=>"validateEmpty|validateString",
                        "site_email"=>"validateEmpty|validateEmail",
                        "site_tags"=>"validateEmpty|validateString",
                        "fb"=>"validateEmpty|validateUrl",
                        "tw"=>"validateEmpty|validateUrl",
                        "insta"=>"validateEmpty|validateUrl",
                        "google"=>"validateEmpty|validateUrl",
                        "sound"=>"validateEmpty|validateUrl"
                    ); 
                $mainsettings['site_name']      =$_POST['site_name'];
                $mainsettings['site_desc']      =$_POST['site_desc'];
                $mainsettings['site_email']     =$valid->sanitizeEmail($_POST['site_email'],'email');
                $mainsettings['site_tags']      =$_POST['site_tags'];
                $mainsettings['fb']             =$_POST['fb'];
                $mainsettings['tw']             =$_POST['tw'];
                $mainsettings['insta']            =$_POST['insta'];
                 $mainsettings['google']            =$_POST['google'];
                $mainsettings['sound']             =$_POST['sound'];
                $mainsettings['username']       =$_POST['username'];
                $valid->validate($mainsettings, $rules);
            } catch (Exception $ex) {
                echo $ex->getMessage();
                die();
            }

            try {
        //        include 'models/connect.php';
        //        include 'models/Add.php';
                $add=new Add($mainsettings,"settings");
                if ($add==TRUE){
                   echo '<script type="text/javascript">alert("Successfully Update");history.back();</script>';
                } else {
                 throw new Exception("error in add data");    
                }
            } catch (Exception $ex) {
                echo $ex->getMessage();    
            }
        }else {
                    try {
                   //     include 'models/main.php';
                   //     include 'models/display.php';
                        $ob=new display("settings");
                        $data=$ob->displayLastRecord();

                    } catch (Exception $ex) {
                       echo $ex->getMessage(); 
                    }
            include 'views/settings.php';    
        }
