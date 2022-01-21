<?php 
      require  'classe/Experience.php';
      ?>

<div id="partie_droite_entete">
                     <p id="titre"><?php echo $Experience->get_experience();?></p>
                     <div id="company"> <img src="image/company.png"  alt="exper">
                     </div>
                     <p id="soust"> <em>Expertise en entreprise</em></p>
                     <p id="p2"><img src="image/menu_vertical.png" id="imag2" alt="image"></p>
                    </div>
                    

                  <div id="partie_droite_corps">
                             <p id="grand"><?php echo $Experience->get_titre1();?> <strong><?php echo $Experience->get_entreprise1();?> </strong></p>
                             <p id="lien"><?php echo $Experience->get_lien1();?></p>
                            <p id="propos"> <?php echo $description1['description1']?></p></p>
                            <hr id="ligne1">
                                      <div id="tete">
                                           <p id="grand"><?php echo $Experience->get_titre2();?> <strong><?php echo $Experience->get_entreprise2();?></strong></p>
                                           <p id="lien"><?php echo $Experience->get_lien2();?></p></p>
                                           <p id="propos"> <?php echo $description2['description2']?></p>
                                           <hr id="ligne1">
                                      </div> 
                                      
                    
                             <div id="tete">
                                   <p id="grand"><?php echo $Experience->get_titre3();?><strong> </strong><?php echo $Experience->get_entreprise3();?></p>
                                   <p id="lien"><?php $Experience->get_lien3();?></p></p>
                                   <p id="propos"> <?php echo $description3['description3']?></p>
                                   <hr id="ligne1">
                             </div>
                        <div id="tete">
                            <p id="grand"><?php echo $Experience->get_titre4();?> <strong><?php echo $Experience->get_entreprise4();?></strong></p>
                            <p id="lien"><?php echo $Experience->get_lien4();?></p></p>
                            <p id="propos"> <?php echo $description4['description4']?></p>
                            <hr id="ligne1">
                        </div>
                        <div id="tete">
                            <p id="grand"><?php echo $Experience->get_titre5();?> <strong><?php echo $Experience->get_entreprise5();?></strong></p>
                            <p id="lien"><?php echo $Experience->get_lien5();?></p></p>
                            <p id="propos"> <?php echo $description5['description5']?></p>
                            <hr id="ligne1">
                        </div>
                        <div id="tete">
                            <p id="grand"><?php echo $Experience->get_titre6();?> <strong><?php echo $Experience->get_entreprise6();?></strong></p>
                            <p id="lien"><?php echo $Experience->get_lien6();?></p></p>
                            <p id="propos"> <?php echo $description6['description6']?></p>
                            <hr id="ligne1">
                        </div>
                  </div>