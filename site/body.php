
            <div class="body">
                <?php
                 include '../includes/ini.php';
                include '../includes/autoload.php';
                $ds=new Display('sections');
   
            $SectionData=$ds->displayAllRecordActive('sec_status');
                for($i=0;$i<count($SectionData);$i++){
               $id[$i]=$SectionData[$i]['id'];
               echo '<div class="section">';
              echo "<h3>{$SectionData[$i]['sec_name']}:</h3>";
              echo '<div class="row">';
               $ds3=new Display('pages');
               $pages{$i}=$ds3->displayBycolumnname($id[$i], 'sectionID','p_status');
               for($j=0;$j<count($pages{$i});$j++){
                   $content=substr($pages{$i}[$j]['p_content'],0,200);
               
                  echo "
                       <div class='object col-lg-6'>
                            <div class='media'>
                                <div class='media-left'>
                                  <a href='#'>
                                      <img class='media-object' src='app/{$pages{$i}[$j]['p_image']}' width='100' height='100' alt='...'>
                                  </a>
                                </div>
                                <div class='media-body'>
                                  <h4 class='media-heading'>{$pages{$i}[$j]['p_name']}</h4>
                                  <p>{$content}</p>
                                      <a href='?page=page&id={$pages{$i}[$j]['id']}'>Read More</a>
                                </div>
                              </div>
                        </div>

";
                                        
               }
               echo '</div>'; 
              
               echo '</div></hr>';
           
           
           }
           /*
                echo '<div class="project">';
                   echo "<img src='app/{$pages{$i}[$j]['p_image']}' width='140' height='100'/>";
                   echo "<h2>{$pages{$i}[$j]['p_name']}</h2>";
                   $content=substr($pages{$i}[$j]['p_content'],0,120);
                   echo "<p>{$content}</p>";
                   echo "<a href='?page=page&id={$pages{$i}[$j]['id']}'>Read more »</a>";
                   echo '</div>';    
                */
                ?>
            </div>
                
<!--                <div class="section">
                    <h3>web design :</h3>
                    <div class="row">
                        <div class="object col-lg-6">
                            <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                      <img class="media-object" src="http://placehold.it/100x100" width="100" height="100" alt="...">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading">html</h4>
                                  <p>this text for design this text for designthis text for designthis text for design <a href="">Read More</a></p>
                                </div>
                              </div>
                        </div>
                        <div class="object col-lg-6">
                            <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                      <img class="media-object" src="http://placehold.it/100x100" width="100" height="100" alt="...">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading">html</h4>
                                  <p>this text for design this text for designthis text for designthis text for design <a href="">Read More</a></p>
                                </div>
                              </div>
                        </div>
                        <div class="object col-lg-6">
                            <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                      <img class="media-object" src="http://placehold.it/100x100" width="100" height="100" alt="...">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading">html</h4>
                                  <p>this text for design this text for designthis text for designthis text for design <a href="">Read More</a></p>
                                </div>
                              </div>
                        </div>
                        <div class="object col-lg-6">
                            <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                      <img class="media-object" src="http://placehold.it/100x100" width="100" height="100" alt="...">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading">html</h4>
                                  <p>this text for design this text for designthis text for designthis text for design <a href="">Read More</a></p>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="section">
                    <h3>programing language :</h3>
                    <div class="row">
                        <div class="object col-lg-6">
                            <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                      <img class="media-object" src="http://placehold.it/100x100" width="100" height="100" alt="...">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading">html</h4>
                                  <p>this text for design this text for designthis text for designthis text for design <a href="">Read More</a></p>
                                </div>
                              </div>
                        </div>
                        <div class="object col-lg-6">
                            <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                      <img class="media-object" src="http://placehold.it/100x100" width="100" height="100" alt="...">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading">html</h4>
                                  <p>this text for design this text for designthis text for designthis text for design <a href="">Read More</a></p>
                                 
                                </div>
                              </div>
                        </div>
                        <div class="object col-lg-6">
                            <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                      <img class="media-object" src="http://placehold.it/100x100" width="100" height="100" alt="...">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading">html</h4>
                                  <p>this text for design this text for designthis text for designthis text for design <a href="">Read More</a></p>
                                </div>
                              </div>
                        </div>
                        <div class="object col-lg-6">
                            <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                      <img class="media-object" src="http://placehold.it/100x100" width="100" height="100" alt="...">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading">html</h4>
                                  <p>this text for design this text for designthis text for designthis text for design <a href="">Read More</a></p>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>-->
