<h3 class="addnewsec sub-header"><a href="?page=sections&action=add">Add New Section</a></h3>
<div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                    <th>ID#</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Location in page</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Created By</th>
                    <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
    for($i=0;$i<count(@$data);$i++){
        echo "
     <tr>
        <td>{$data[$i]['id']}</td>
        <td>{$data[$i]['sec_name']}</td>
        <td>{$data[$i]['sec_status']}</td>
        <td>{$data[$i]['sec_location']}</td>
        <td>{$data[$i]['sec_desc']}</td>
        <td>{$data[$i]['sec_date']}</td>
        <td>{$data[$i]['sec_username']}</td>
        <td class='icondelete'>
        <a href='?page=sections&action=delete&id={$data[$i]['id']}'><span class='glyphicon glyphicon-trash'></span></a>
        <a href='?page=sections&action=edit&id={$data[$i]['id']}'><span class='glyphicon glyphicon-edit'></span></a>
        </td>

    </tr>
        "            
;
    }
    ?>
              </tbody>
            </table>
          </div>