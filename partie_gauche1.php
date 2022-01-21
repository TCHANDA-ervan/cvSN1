<?php 
      require  'classe/Information.php';
      ?>

<div id="partie_gauche1" >  
                 <div id="barrere">  
                     <img id="menuss" src="image/menu.png" alt="liste">
                     <img id="baton" src="image/thick.png" alt="baton">
                     <img id="fermer" src="image/delete.png" alt="delete">
                     <div id="chercher"><img  src="image/search.png" alt="search"></div>
                    <div  id="search"> <input  id="rev" type="text" name="search" placeholder="Besoin d'un chef de projet ?"> </div>
                </div>
            
                 <img id="im3">
                 <p id="text21"><strong><?php echo $Information->get_nom();?> </strong></p>
                 <p id="subi"><sub><?php echo $Information->get_filiere();?></sub></p>
                 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <div class='button-parent'>
  <input type="checkbox" id='btn'>
  <label for="btn" class='button'>
        <i class="material-icons">+</i>
      </label>

  <div class="link-parent">
    <a href='bd/index.php' class='link-item' id='link-one' title="Envoyer votre CV dans une adresse Mail">
      <i class="material-icons">+</i>
    </a>
    <a class='link-item' id='link-two' title="Enregistrez votre CV en pdf" href="mon_cv.pdf" download >
      <i class="material-icons">+</i>
    </a>
  </div>
</div>
                 
            
</div> 