<h2 class="sub-header">Pages</h2>

<?php
//`id`, `p_name`, `p_content`, `p_status`, `p_visit`, `sectionID`, `p_image`, `createdBy`, `p_date`
include '../includes/ini.php';
include '../includes/autoload.php';
$pageName='pages';
if($_POST or @$_GET['action']){
   
    if(isset($_GET['action'])&& $_GET['action']=="add"){
        $tablename='sections';
       // include 'models/main.php';
        //include 'models/display.php';
        $ob=new Display($tablename);
        $displaySectionName=$ob->displayAllRecord();
        include 'views/addpage.php';
        if(isset($_POST['submit'])&& $_POST['submit']=="Add"){
            $valid=new Validation();
            try {
                $rules=array(
           "p_name"=>"validateEmpty|validateString"
                );
            $datapages['p_name']=$_POST['p_name'];
            $datapages['p_content']=$_POST['p_content'];
            $datapages['p_status']=$_POST['p_status'];
            $datapages['p_visit']=0;
            $datapages['sectionID']=$_POST['sectionID'];
            $datapages['createdBy']=$_SESSION['admin'];
            $datapages['p_date']=$_POST['p_date'];
            if(isset($_FILES)){
            if(!empty($_FILES['p_image']['name'])){
            try {
                //include 'models/Upload.php';
                $file=$_FILES['p_image'];
                $extentionallowed=array('jpg','png','gif','jpeg');
                $maxSize=2048000;
                $directory='resources/uploads/';
                $upload=new Upload($file, $extentionallowed, $maxSize, $directory);
                $upload->upload();
                $url=$upload->geturl();
                $datapages['p_image']=$directory.$url[0];
            } catch (Exception $ex) {
                echo $ex->getMessage();
            }
            } else {
            $datapages['p_image']= "http://placehold.it/100x100";   
            }
            }
                $valid->validate($datapages, $rules);
            } catch (Exception $ex) {
                echo $ex->getMessage();
                die();
            }
            
             $tablename="pages";
            
            try {
            //include 'models/Add.php';
            $ob=new Add($datapages, $tablename);
            if($ob){
              echo '<script type="text/javascript">alert("Successfully ADD");history.back();history.back();</script>';
            }
            } catch (Exception $ex) {
                echo $ex->getMessage();
            }
        }
    }
    if(isset($_GET['action'])&& $_GET['action']=="delete" ){
        
        try {
            $id=$_GET['id'];
        $tablename="pages";
        //include 'models/main.php';
        //include 'models/Delete.php';
        $ob=new Delete($tablename);
        $ob->deleteRecordById($id);
        if($ob){
            echo '<script type="text/javascript">alert("Successfully Delete");history.back();</script>';
        }
        } catch (Exception $ex) {
        echo $ex->getMessage();    
        }
    }
    if(isset($_GET['action'])&& $_GET['action']=="edit"){
         $tablename='sections';
         $id=$_GET['id'];
       // include 'models/main.php';
        //include 'models/display.php';
        $ob=new display($tablename);
        $displaySectionName=$ob->displayAllRecord();
        $tablename="pages";
        $edit=new display($tablename);
        $displaybyID=$edit->displayRecordById($id);
        
        
        include 'views/editpage.php';
        if(isset($_POST['submit'])&& $_POST['submit']=="Edit"){
            try {
                $valid=new Validation();
                 $rules=array(
           "p_name"=>"validateEmpty|validateString"
                );
             $pageUpdate['p_name']=$_POST['p_name'];
            $pageUpdate['p_content']=$_POST['p_content'];
            $pageUpdate['p_status']=$_POST['p_status'];
            $pageUpdate['p_visit']=0;
            $pageUpdate['sectionID']=$_POST['sectionID'];
            $pageUpdate['p_date']=$_POST['p_date'];
             if(isset($_FILES)){
            if(!empty($_FILES['p_image']['name'])){
            try {
                //include 'models/Upload.php';
                $file=$_FILES['p_image'];
                $extentionallowed=array('jpg','png','gif','jpeg');
                $maxSize=2048000;
                $directory='resources/uploads/';
                $upload=new Upload($file, $extentionallowed, $maxSize, $directory);
                $upload->upload();
                $url=$upload->geturl();
                $pageUpdate['p_image']=$directory.$url[0];
            } catch (Exception $ex) {
                echo $ex->getMessage();
            }
            } else {
            $pageUpdate['p_image']= "../images/logo.png";   
            }
            }
            $valid->validate($pageUpdate, $rules);
            } catch (Exception $ex) {
                echo $ex->getMessage();  
                die();
            }
            
            
            try {
                //include 'models/Update.php';
                $ob=new Update($pageUpdate, $tablename);
                $update=$ob->editData($id);
                if($update){
                      echo '<script type="text/javascript">alert("Successfully Update");history.back();history.back();</script>';
                }
            } catch (Exception $ex) {
            echo $ex->getMessage();    
            }
        }
    }
} else {
     $tablename="pages";
  //  include 'models/main.php';
   // include 'models/display.php';
    $ob= new Display($tablename);
    $displaypages=$ob->displayAllRecord();
    $ob2=new Display('sections');
    for($i=0;$i<count($displaypages);$i++){
        $id=$displaypages[$i]['sectionID']; 
        $names[$i]=$ob2->displayRecordById($id);
    }
    include 'views/pages.php';    
}