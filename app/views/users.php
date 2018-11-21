
<div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                    <th>ID#</th>
                    <th>Name</th>
                    <th>Username</th>
                    <th>password</th>
                    <th>E-mail</th>
                    <th>Date</th>
                </tr>
              </thead>
              <tbody>
                <!--`id`, `name`, `username`, `password`, `email`, `date`-->
                    <?php
                    for($i=0;$i<count(@$DataUsers);$i++){
                        echo "
                     <tr>
                        <td>{$DataUsers[$i]['id']}</td>
                        <td>{$DataUsers[$i]['name']}</td>
                        <td>{$DataUsers[$i]['username']}</td>
                        <td>{$DataUsers[$i]['password']}</td>
                        <td>{$DataUsers[$i]['email']}</td>
                        <td>{$DataUsers[$i]['date']}</td>
                       
                    </tr>
                        "            
                ;
                    }
                    ?>
              </tbody>
            </table>
          </div>