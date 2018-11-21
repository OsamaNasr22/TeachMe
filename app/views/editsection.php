
<!--`sec_id`, `sec_name`, `sec_status`, `sec_location`, `sec_desc`, `sec_date`, `sec_username`-->


 <form action="" method="post" class="form-horizontal">
     <div class="form-group">
    <label class="control-label col-sm-2" for="Sec_Name">Site Name:</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="Sec_Name" name="sec_name" placeholder="Enter Sec Name" value="<?php echo $data['sec_name']?>">
    </div>
  </div>
     <div class="form-group">
    <label class="control-label col-sm-2" for="sec-desc">Sec Status:</label>
    <div class="col-sm-5">
        <select class="form-control" name="sec_location">
                    <?php
                    if($data['sec_location']=='side'){
                        echo '
                    <option  value="side">Side</option>
                    <option value="body">Body</option>
                    ';
                    } else {
                        echo '
                    <option value="body">Body</option>
                    <option  value="side">Side</option>';
                    }
                    ?>   
                </select>
    </div>
    <div class="col-sm-5">
        <select class="form-control" name="sec_status">
                   <?php
                    if($data['sec_status']=='active'){
                        echo '
                    <option  value="active">Active</option>
                    <option value="disactive">Disactive</option>';
                    } else {
                        echo '
                    <option value="disactive">Disactive</option>
                    <option  value="active">Active</option>';
                    }
                    ?>
                </select>
    </div>
  </div>
     <div class="form-group">
    <label class="control-label col-sm-2" for="sec-desc">Sec Description:</label>
    <div class="col-sm-10">
        <textarea  class="form-control" id="sec-desc" name="sec_desc" placeholder="Sec Description"><?php echo $data['sec_desc']?></textarea>
    </div>
  </div>
     <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-primary" name="submit" value="Edit">
    </div>
  </div>
     <input type="hidden" name="sec_username" value="<?php echo $_SESSION['admin']?>">
 </form>
