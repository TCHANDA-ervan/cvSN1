<?php 
      require  'classe/Profil.php';
      ?>
<div id="partie_gauche2">
                        
                        <div id="gat">
                            <p id="i1"><img src="image/cake.png" style="width: 40px; height:40px " alt="gateau d'anniversaire"></p> 
                            <p id="text1"><?php echo $Profil->get_naissance();?>
                                <br><?php echo $Profil->get_origine();?>
                                <br><?php echo $Profil->get_matrimoniale();?></p>
                        </div>
                             
                            <hr id="ligne10">
                            <p id="i2"><img src="image/local.png" style="width: 35px; height:35px" alt="Localisation"></p>
                            <p id="text2"><?php echo $Profil->get_quartier();?>
                                <br><?php echo $Profil->get_VillePays();?>
                                <br><?php echo $Profil->get_map();?></p>
                            <hr id="ligne11">

                           <p id="i3"><img src="image/phone.png" style="width: 35px; height:35px" alt="Localisation"></p>
                           <p id="text3"><?php echo $Profil->get_tel();?>
                               <br><?php echo $Profil->get_reseau();?></p>
                           <hr id="ligne12">
                           
                           <p id="i4"><img src="image/envelope.png" style="width: 35px; height:35px" alt="Localisation"></p>
                           <p id="text4"><?php echo $Profil->get_mail();?>
                               <br><?php echo $Profil->get_lien();?></p>
                             <br>
                           <p id="text5">
                          <tia style="color:rgba(255, 255, 255, 0.856);">+100 PROJETS</tia> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; +20 CONTACTS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              12 ANS D'EXP
                             </p>
                         <hr id="ligne13">
                    </div>