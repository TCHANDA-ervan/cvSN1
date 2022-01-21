<?php 
      require  'classe/InteretLangue.php';
      ?>




<div id="pont_interet">
                                     <h3 id="in"><?php echo $InteretLangue->get_point_interet();?></h3>
                                     <small><i>Simples passes temps pour se faire un peu plaisir</i></small>
                                       <p id="poi"><img src="image/image.png" style="width: 270px;height:70px " alt="point interet"></p>
                                    
                              </div>

                             
                                  <div id="langue">
                                    <p id="in"><strong><?php echo $InteretLangue->get_langue();?></strong></p>
                                    
                                    <p id="francai"><input type="checkbox" checked> &nbsp;&nbsp;&nbsp; Français</p>
                                    <p id="angla"><input type="checkbox" checked> &nbsp;&nbsp;&nbsp; Anglais</p>
                                  </div>
                                  