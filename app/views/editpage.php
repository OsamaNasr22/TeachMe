<form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
     <div class="form-group">
    <label class="control-label col-sm-2" for="P_Name">Page Name:</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="P_Name" name="p_name" placeholder="Enter Page Name" value="<?php echo $displaybyID['p_name']?>">
    </div>
  </div>
     <div class="form-group">
    <label class="control-label col-sm-2" for="sec-desc">Page Status:</label>
            <div class="col-sm-5">
                        <select class="form-control" name="p_status">
                        <?php
                        if($displaybyID['p_status']=='active'){
                            echo "
                                <option value='active'>Active</option>
                        <option value='disactive'>DisActive</option>";
                        } else {
                             echo "               
                        <option value='disactive'>DisActive</option>
                        <option value='active'>Active</option>";
                        }
                        ?>
                    </select>
            </div>
    <div class="col-sm-5">
        <select class="form-control" name="sectionID">
        <?php
        for($i=0;$i<count($displaySectionName);$i++){
            echo "<option value='{$displaySectionName[$i]['id']}'>{$displaySectionName[$i]['sec_name']}</option>";
        }
        ?>
    </select>
    </div>
  </div>
    <div class="form-group">
    <label class="control-label col-sm-2" for="upload">Upload Image:</label>
    <div class="col-sm-10">
        <input class="form-control" id='upload' type="file" name="p_image[]" >
    </div>
  </div>
     <div class="form-group">
    <label class="control-label col-sm-2" for="p_content">Page Content:</label>
    <div class="col-sm-10">
        <textarea  class="form-control" id="p_content" name="p_content" placeholder="Page Content"><?php echo $displaybyID['p_content'];?></textarea>
    </div>
  </div>
     <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-primary" name="submit" value="Edit">
    </div>
  </div>
         <input type="hidden" name="p_date" value="<?php echo date("d-m-y");?>">>
 </form>
