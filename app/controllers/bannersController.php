<h2 class="sub-header">Banners</h2>
<?php
include '../includes/ini.php';
include '../includes/autoload.php';
if($_POST or @$_GET['action']){
    //add new banner 
    
                if(isset($_GET['action'])&&$_GET['action']=="add"){
                    include 'views/addbanner.php';
                    
            if(isset($_POST['submit'])&&$_POST['submit']=='Upload'){
           $file=$_FILES['image'];
           $extentionallowed=array("jpg","png");
           $maxSize=2084000;
           $directory="resources/uploads/";
           //include 'models/Upload.php';
            try {
               $ob=new Upload($file, $extentionallowed, $maxSize, $directory);
          $ob->upload();
          $url=$ob->geturl();
           } catch (Exception $ex) {
               echo $ex->getMessage();
           }

          // include 'models/main.php';
           //include 'models/Add.php';
          $valid=new Validation();
          $rules=array(
              "type"=>"validateEmpty|validateString"
          );
           for ($i = 0; $i < count($url); $i++) {
               try {
               $bannerarray{$i}['bannerName']=$url[$i];
               $bannerarray{$i}['bannerUrl']=$directory.$url[$i];
               $bannerarray{$i}['status']=$_POST['status'];
               $bannerarray{$i}['type']=$_POST['type'];
               $bannerarray{$i}['createdBy']=$_SESSION['admin'];
               $valid->validate($bannerarray{$i}, $rules);
               } catch (Exception $ex) {
                   echo $ex->getMessage();
                   die();
               }

               $ob=new Add($bannerarray{$i}, 'banners');

           }
           if($ob==TRUE){
               echo '<script type="text/javascript">alert("Successfully Upload");history.back();history.back();</script>';
           }
       }
                }
                 // edit banner 
                if(isset($_GET['action'])&&$_GET['action']=='edit'){
                try {
        //            include 'models/main.php';
        //            include 'models/display.php';
                    $id=$_GET['id'];
                    $ob=new display('banners');
                    $data=$ob->displayRecordById($id);

                } catch (Exception $ex) {
                    echo $ex->getMessage();    
                }
                include 'views/editbanner.php';
                  if(isset($_POST['submit'])&& $_POST['submit']=="Edit"){
                   $id=$_GET['id'];
                      $file=$_FILES['image'];
                $extentionallowed=array("jpg","png");
                $maxSize=2084000;
                $directory="resources/uploads/";
                //include 'models/Upload.php';
                try {
                    $ob=new Upload($file, $extentionallowed, $maxSize, $directory);
               $ob->upload();
               $url=$ob->geturl();
                } catch (Exception $ex) {
                    echo $ex->getMessage();
                }


               // include 'models/main.php';
                //include 'models/Add.php';
               $valid=new Validation();
               $rules=array(
                   "type"=>"validateEmpty|validateString"
               );

                    try {
                    $bannerarray['bannerName']=$url[0];
                    $bannerarray['bannerUrl']=$directory.$url[0];
                    $bannerarray['status']=$_POST['status'];
                    $bannerarray['type']=$_POST['type'];
                    $bannerarray['createdBy']=$_SESSION['admin'];
                    $valid->validate($bannerarray, $rules);
                    } catch (Exception $ex) {
                        echo $ex->getMessage();
                        die();
                    }

                    $ob=new Update($bannerarray, 'banners');
                    $ob->editData($id);


                if($ob==TRUE){
                    echo '<script type="text/javascript">alert("Successfully Edit");history.back();history.back();</script>';
                }
                  }
            }
    
            //delete banner 
                if(isset($_GET['action'])&&$_GET['action']=="delete"){
                    $tablename='banners';
                    $id=$_GET['id'];
                 
                    //delete from database
                   
                    $deletefromdb=new Delete($tablename);
                    $d=$deletefromdb->deleteRecordById($id);
                    //delete from directory
                     $ds=new Display($tablename);
                     $displayrow=$ds->displayRecordById($id);
                    $file[]= $displayrow['bannerUrl'];
                    if(file_exists($file[0])){
                    $unlink=new DeleteFile($file);
                    $d=$unlink->delete();
                    }
                    if($d==TRUE){
                        echo '<script type="text/javascript">alert("Successfully delete");history.back();</script>';
                    }

                }
   
} else {
    //include 'models/main.php';
    //include 'models/display.php';
    $ob=new Display("banners");
    $displayBannerdata=$ob->displayAllRecord();
    include 'views/banners.php';
}