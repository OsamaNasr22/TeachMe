
            <div class="sidbar">
                <div class="panel-group" id="accordion">
                <?php
                include '../includes/ini.php';
                include '../includes/autoload.php';
                $ds=new Display('sections');
   
            $SectionData=$ds->displayAllRecordActive('sec_status'); //array include all Section's record
   for($i=0;$i<count($SectionData);$i++){
       $id[]=$SectionData[$i]['id'];//array to save the id of each section 
       echo '<div class="panel panel-default">';
       echo '<div class="panel-heading">';
       echo "<h4 class='panel-title'>
        <a data-toggle='collapse' data-parent='#accordion' href='#collapse{$i}'>{$SectionData[$i]['sec_name']}</a>
      </h4>";
       echo '</div>';
       echo "<div id='collapse{$i}' class='panel-collapse collapse in'>
        <ul class='list-group'>";
        $ds2=new Display('pages');
         $pagedata{$i}=$ds2->displayBycolumnname($id[$i],'sectionID','p_status'); //some of arrays , each array include the data of sectionid=id 
       for($j=0;$j<count($pagedata{$i});$j++){
           echo "<a href='?page=page&id={$pagedata{$i}[$j]['id']}'><li class='panel-body list-group-item'>{$pagedata{$i}[$j]['p_name']}</li></a>";
       }
       echo '</ul>';
       echo '</div>';
       echo '</div>';
   }
 
    ?>
            </div>
            </div>
                
                












<!--
<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
        Web design</a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse in">
        <ul class="list-group">
             <a href=""><li class="panel-body list-group-item  ">html</li></a>
              <a href=""><li class="panel-body list-group-item  ">Css</li></a>
              <a href=""><li class="panel-body list-group-item  ">java script</li></a>
              <a href=""><li class="panel-body list-group-item  ">jquery</li></a>
          </ul>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
        Web design</a>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
        
            <ul class="list-group">
             <a href=""><li class="panel-body list-group-item  ">html</li></a>
              <a href=""><li class="panel-body list-group-item  ">Css</li></a>
              <a href=""><li class="panel-body list-group-item  ">java script</li></a>
              <a href=""><li class="panel-body list-group-item  ">jquery</li></a>
          </ul>
       
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
        Web design</a>
      </h4>
    </div>
    <div id="collapse3" class="panel-collapse collapse">
        <ul class="list-group">
             <a href=""><li class="panel-body list-group-item  ">html</li></a>
              <a href=""><li class="panel-body list-group-item  ">Css</li></a>
              <a href=""><li class="panel-body list-group-item  ">java script</li></a>
              <a href=""><li class="panel-body list-group-item  ">jquery</li></a>
          </ul>
    </div>
  </div>
</div>-->
         
