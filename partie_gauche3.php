<?php 
      require  'classe/Domaine.php';
      ?>
<div id="partie_gauche3">
                        <div id="get_text9">
                            <p id="check"><input style="background: blue;" type="checkbox" checked>&nbsp;&nbsp;&nbsp;&nbsp; <strong><?php echo $DEVF['DEVF']?></strong></p>
                            <p id="spa"><span><img src="image/star.png" alt="etoile"></span></p>
                        </div>
                        <p id="sub1"><sub><?php echo $Domaine->get_formation1();?></sub></p>
                        <p id="pro1"><input style="width: 283px;" type="range" max=100 value=80></p>
        
                        <div id="get_text10">
                            <p id="check"><input type="checkbox" checked>&nbsp;&nbsp;&nbsp;&nbsp; <strong><?php echo $DEVB['DEVB']?></strong></p>
                            <p id="spa"><span><img src="image/star.png" alt="etoile"></span></p>
                        </div>
                        <p id="sub1"><sub><?php echo $Domaine->get_formation2();?></sub></p>
                        <p id="pro1"><input style="width: 283px;" type="range" max=100 value=30></p>
        
                        <div id="get_text10">
                            <p id="check"><input type="checkbox" checked >&nbsp;&nbsp;&nbsp;&nbsp; <strong><?php echo $DEVM['DEVM']?></strong></p>
                            <p id="spa"><span><img src="image/star.png" alt="etoile"></span></p>
                        </div>
                        <p id="sub1"><sub><?php echo $Domaine->get_formation3();?></sub></p>
                        <p id="pro1"><input style="width: 283px;" type="range" max=100 value=10></p>
        
                        <div id="get_text10">
                            <p id="check"><input type="checkbox" checked>&nbsp;&nbsp;&nbsp;&nbsp; <strong><?php echo $UI['UI']?></strong></p>
                            <p id="spa"><span><img src="image/star.png" alt="etoile"></span></p>
                        </div>
                        <p id="sub1"><sub><?php echo $Domaine->get_formation4();?></sub></p>
                        <p id="pro1"><input style="width: 283px;" type="range" max=100 value=15></p>
        
                        <div id="get_text10"> 
                            <p id="check"><input type="checkbox" checked>&nbsp;&nbsp;&nbsp;&nbsp; <strong><?php echo $BD['BD']?></strong></p>
                            <p id="spa"><span><img src="image/star.png" alt="etoile"></span></p>
                        </div>
                        <p id="sub1"><sub><?php echo $Domaine->get_formation5();?></sub></p>
                        <p id="pro1"><input style="width: 283px;" type="range" max=100 value=20></p>
        
                        <div id="get_text10">
                            <p id="check"><input type="checkbox" checked>&nbsp;&nbsp;&nbsp;&nbsp; <strong><?php echo $OUTIL['OUTIL']?> </strong></p>
                            <p id="spa"><span><img src="image/star.png" alt="etoile"></span></p>
                        </div>
                        <p id="sub1"><sub><?php echo $Domaine->get_formation6();?></sub></p>
                        <p id="pro1"><input style="width: 283px;" type="range" max=100 value=30></p>
                    </div>
                    </div> 