<h3 class="addnewsec sub-header"><a href="?page=pages&action=add">Add New Page</a></h3>
<div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                    <th>ID#</th>
                    <th>Page Name</th>
                    <th>Status</th>
                    <th>Section Name</th>
                    <th>Date</th>
                    <th>Created By</th>
                    <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
    //`id`, `p_name`, `p_content`, `p_status`, `p_visit`, `sectionID`, `p_image`, `createdBy`, `p_date`
    for($i=0;$i< count($displaypages);$i++){
    echo "
    <tr>
        <td>{$displaypages[$i]['id']}</td>
        <td>{$displaypages[$i]['p_name']}</td>
        <td>{$displaypages[$i]['p_status']}</td>
        <td>{$names[$i]['sec_name']}</td>
        <td>{$displaypages[$i]['p_date']}</td>
        <td>{$displaypages[$i]['createdBy']}</td>
            <td class='icondelete'>
        <a href='?page=pages&action=delete&id={$displaypages[$i]['id']}'><span class='glyphicon glyphicon-trash'></span></a>
        <a href='?page=pages&action=edit&id={$displaypages[$i]['id']}'><span class='glyphicon glyphicon-edit'></span></a>
            </td>

    </tr>
    ";
    }
    ?>
              </tbody>
            </table>
          </div>