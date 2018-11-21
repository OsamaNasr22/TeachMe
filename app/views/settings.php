<!--`id`, `site_name`, `site_desc`, `site_email`, `site_tags`, `site_homepanel`, `fb`, `tw`, `yt`, `insta`, `google`, `username`-->
<form action="" method="post" class="form-horizontal">
  <div class="form-group">
    <label class="control-label col-sm-2" for="Site_Name">Site Name:</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="Site_Name" name="site_name" placeholder="Enter Site Name" value="<?php echo $data['site_name'];?>">
    </div>
  </div>
    <div class="form-group">
    <label class="control-label col-sm-2" for="Site_Email">Site Email</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="Site_Email" name="site_email" placeholder="Enter Site Email" value="<?php echo $data['site_email'];?>">
    </div>
  </div>
    <div class="form-group">
    <label class="control-label col-sm-2" for="face">FaceBook Link:</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="face" name="fb" placeholder="Enter Facebook Link" value="<?php echo $data['fb'];?>">
    </div>
  </div>
    <div class="form-group">
    <label class="control-label col-sm-2" for="Twitter">Twitter Link:</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="Twitter" name="tw" placeholder="Enter Twitter Link" value="<?php echo $data['tw'];?>">
    </div>
  </div>
     <div class="form-group">
    <label class="control-label col-sm-2" for="insta">Instagram Link:</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="insta" name="insta" placeholder="Enter Instagram Link" value="<?php echo $data['insta'];?>">
    </div>
  </div>
    <div class="form-group">
    <label class="control-label col-sm-2" for="google">Google+ Link:</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="google" name="google" placeholder="Enter Google+ Link" value="<?php echo $data['google'];?>">
    </div>
  </div>
    <div class="form-group">
    <label class="control-label col-sm-2" for="sound">SoundCloud Link:</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="sound" name="sound" placeholder="Enter SoundCloud Link" value="<?php echo $data['sound'];?>">
    </div>
  </div>
     <div class="form-group">
    <label class="control-label col-sm-2" for="Description">Site Description:</label>
    <div class="col-sm-10">
        <textarea class="form-control" id="Description" name="site_desc" placeholder="Site Description"><?php echo $data['site_desc'];?></textarea>
    </div>
  </div>
    <div class="form-group">
    <label class="control-label col-sm-2" for="tags">Site Tags:</label>
    <div class="col-sm-10">
        <textarea  class="form-control" id="tags" name="site_tags" placeholder="Site Tags"><?php echo $data['site_tags'];?></textarea>
    </div>
  </div>
    <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-primary" name="submit" value="Update">
    </div>
<input type="hidden" name="username" value="<?php echo $_SESSION['admin']?>" >
  
  </div>
</form>