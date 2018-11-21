<h2 class="sub-header">Sections</h2>

<?php
//<!--` $tablename="sections";sec_id`, `sec_name`, `sec_status`, `sec_location`, `sec_desc`, `sec_date`, `sec_username`-->
include '../includes/ini.php';
include '../includes/autoload.php';
$pageName='sections';
$tablename="sections";

if($_POST or @$_GET['action']){
        if(@$_GET['action']=="add"){
            include 'views/addsection.php';
               //add new section
        if(@isset($_POST['submit'])&& $_POST['submit']=="Add"){
            try {
                $valid=new Validation();
                $rules=array(
                    'sec_name'=>'validateEmpty|validateString'
                );
                $sectionData['sec_name'] =$_POST['sec_name'];
            $sectionData['sec_status'] =$_POST['sec_status'];
            $sectionData['sec_location'] =$_POST['sec_location'];
            $sectionData['sec_desc'] =$valid->sanitizeString($_POST['sec_desc'],'desc');
            $sectionData['sec_username'] =$_SESSION['admin'];
            $valid->validate($sectionData, $rules);
            } catch (Exception $ex) {
                echo $ex->getMessage();
                die();
            }

            try {

    //            include 'models/main.php';
    //            include 'models/Add.php';
                $ob=new Add($sectionData,$tablename);
                if($ob){    
                    echo '<script type="text/javascript">alert("Successfully Add");history.back();history.back();</script>';
                }
            } catch (Exception $ex) {
                echo $ex->getMessage();    
            }
        }
    }
    
     
    //delete section
    if($_GET['action']=='delete'){
        try {
             
//            include 'models/main.php';
//            include 'models/Delete.php';
            $id= intval($_GET['id']);
            $ob= new Delete($tablename);
            $delete=$ob->deleteRecordById($id);
            if($delete){        
                 echo '<script type="text/javascript">alert("Successfully Delete");history.back();</script>';

            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }
    //edit section
    if(isset($_GET['action'])&&$_GET['action']=='edit'){
        try {
//            include 'models/main.php';
//            include 'models/display.php';
            $id=$_GET['id'];
            $ob=new display($tablename);
            $data=$ob->displayRecordById($id);
        
        } catch (Exception $ex) {
            echo $ex->getMessage();    
        }
        include 'views/editsection.php';
        
        
            if(isset($_POST['submit'])&& $_POST['submit']=="Edit"){
                try {
                    $valid=new Validation();
                    $rules=array(
                        'sec_name'=>'validateEmpty|validateString'
                    );
                    $sectionData['sec_name'] =$_POST['sec_name'];
                $sectionData['sec_status'] =$_POST['sec_status'];
                $sectionData['sec_location'] =$_POST['sec_location'];
                $sectionData['sec_desc'] =$valid->sanitizeString($_POST['sec_desc'],'desc');
                $sectionData['sec_username'] =$_SESSION['admin'];
                $valid->validate($sectionData, $rules);
                } catch (Exception $ex) {
                    echo $ex->getMessage();
                    die();
                }
                $id=$_GET['id'];
                try {
                    //include 'models/Update.php';
                    $ob=new Update($sectionData, $tablename);
                    $edit=$ob->editData($id);
                    if($edit){
                        echo '<script type="text/javascript">alert("Successfully Update");history.back();history.back();</script>';
                    }
                } catch (Exception $ex) {
                    echo $ex->getMessage();
                }

            }
    }
    //<!--` $tablename="sections";sec_id`, `sec_name`, `sec_status`, `sec_location`, `sec_desc`, `sec_date`, `sec_username`-->

    
}else {

//    include 'models/main.php';
//    include 'models/display.php';
    $ob=new Display($tablename);
    $data=$ob->displayAllRecord('id');
    include 'views/sections.php';
}
