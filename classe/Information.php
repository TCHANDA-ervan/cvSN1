<?php
class Information{
    public $nom;
    public $filiere;
    

function __construct($nom,$filiere)
{
    $this->nom=$nom;
    $this->filiere=$filiere;
    
}
function get_nom(){
    return $this->nom;
}
function get_filiere(){
    return $this->filiere;
}

}
$Information = new Information("","");
?>
