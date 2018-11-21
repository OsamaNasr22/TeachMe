<form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
    <div class="form-group">
    <label class="control-label col-sm-2" for="type">Type:</label>
    <div class="col-sm-5">
        <input class="form-control" id="type" type="text" name="type" placeholder="enter type" required>
    </div>
     <div class="col-sm-5">
        <select class="form-control" name="status">
                     <option value=""></option>
                    <option  value="active">Active</option>
                    <option value="disactive">Disactive</option>
                </select>
    </div>
  </div>
    <div class="form-group">
    <label class="control-label col-sm-2" for="upload">Upload Banner:</label>
    <div class="col-sm-10">
        <input class="form-control" id="upload" type="file" name="image[]" multiple="" required>
    </div>
  </div>
    <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
        <input class="btn btn-primary " type="submit" name="submit" value="Upload">
    </div>
  </div>
    
</form>