<?php 
      require  'classe/Cursus.php';
      ?>


<div id="cursus">
                                <img src="image/mortarboard.png" id="diplo" alt="diplome">
                                   <p id="titre"> <?php echo $Cursus->get_cursus();?></p>
                                    <p id="soust1"> <em>Diplôme et formations certifiantes</em></p>
                                    <p id="p2"><img src="image/menu_vertical.png" id="imag2" alt="image"></p>
                             </div>

                                     <div id="corps_cursus">
                                         <div class="temps">
                                 <kbd> </kbd>      
                              
                           <div id="tete">
                            <p id="grand"><?php echo $Cursus->get_niveau1();?> <strong><?php echo $etablissement1['etablissement1']?></strong></p>
                            <p id="haut"> <span class="liens">2020 - </span> <i><?php echo $Cursus->get_niveau8();?></i> </p>
                            <hr id="ligne1">
                        </div>                        <div id="tete">
                            <p id="grand"><?php echo $Cursus->get_niveau2();?> <strong><?php echo $etablissement2['etablissement2']?></strong></p>
                            <p id="haut"> <span class="liens">2019 - </span> <i><?php echo $Cursus->get_niveau7();?></i> </p>
                            <hr id="ligne1">
                        </div>  
                        
                        <div id="tete">
                            <p id="grand"><?php echo $Cursus->get_niveau3();?> <strong><?php echo $etablissement3['etablissement3']?></strong></p>
                            <p id="haut"> <span class="liens">août 2019 - </span> <i><?php echo $Cursus->get_niveau6();?></i> </p>
                            <hr id="ligne1">
                        
                    </div>
                    <div id="tete">
                        <p id="grand"><?php echo $Cursus->get_niveau4();?><strong><?php echo $etablissement4['etablissement4']?></strong></p>
                        <p id="haut"> <span class="liens">juillet 2018 - </span> <span class="descrit"><i><?php echo $Cursus->get_niveau5();?> </span></i> </p>
                        <hr id="ligne1">
                   </div>