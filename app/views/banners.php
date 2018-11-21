<h3 class="addnewsec sub-header"><a href="?page=banners&action=add">Add New Banner</a></h3>
<div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                    <th>ID#</th>
                    <th>Banner Name</th>
                    <th>Status</th>
                    <th>Type</th>
                    <th>Banner Url</th>
                    <th>Date</th>
                    <th>Created By</th>
                    <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <!--`id`, `bannerName`, `bannerUrl`, `status`, `createdBy`, `creatDate`-->
                    <?php
                    for($i=0;$i<count(@$displayBannerdata);$i++){
                        echo "
                     <tr>
                        <td><p>{$displayBannerdata[$i]['id']}</p></td>
                        <td><p class='text'>{$displayBannerdata[$i]['bannerName']}</p></td>
                        <td><p>{$displayBannerdata[$i]['status']}</p></td>
                         <td><p>{$displayBannerdata[$i]['type']}</p></td>
                        <td><p class='text'>{$displayBannerdata[$i]['bannerUrl']}</p></td>
                        <td><p>{$displayBannerdata[$i]['creatDate']}</p></td>
                        <td><p>{$displayBannerdata[$i]['createdBy']}</p></td>
                        <td class='icondelete'><p>
                        <a href='?page=banners&action=delete&id={$displayBannerdata[$i]['id']}'><span class='glyphicon glyphicon-trash'></span></a>
                                    <a href='?page=banners&action=edit&id={$displayBannerdata[$i]['id']}'><span class='glyphicon glyphicon-edit'></span></a>

                        </p></td>

                    </tr>
                        "            
                ;
                    }
                    ?>
              </tbody>
            </table>
          </div>