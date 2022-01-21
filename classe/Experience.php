<?php
class Experience{
    public $experience;
    public $titre1;
    public $entreprise1;
    public $lien1;
    public $titre2;
    public $entreprise2;
    public $lien2;
    public $titre3;
    public $entreprise3;
    public $lien3;
    public $titre4;
    public $entreprise4;
    public $lien4;
    public $titre5;
    public $entreprise5;
    public $lien5;
    public $titre6;
    public $entreprise6;
    public $lien6;
    
    

  function __construct($experience, $titre1, $entreprise1, $lien1,$titre2, $entreprise2, $lien2, $titre3, $entreprise3, $lien3, $titre4, $entreprise4, $lien4, $titre5, $entreprise5, $lien5, $titre6, $entreprise6, $lien6)
{
    $this->experience=$experience;
    $this->titre1=$titre1;
    $this->entreprise1=$entreprise1;
    $this->lien1=$lien1;
    $this->titre2=$titre2;
    $this->entreprise2=$entreprise2;
    $this->lien2=$lien2;
    $this->titre3=$titre3;
    $this->entreprise3=$entreprise3;
    $this->lien3=$lien3;
    $this->titre4=$titre4;
    $this->entreprise4=$entreprise4;
    $this->lien4=$lien4;
    $this->titre5=$titre5;
    $this->entreprise5=$entreprise5;
    $this->lien5=$lien5;
    $this->titre6=$titre6;
    $this->entreprise6=$entreprise6;
    $this->lien6=$lien6;   
}
function get_experience(){
    return $this->experience;
}
function get_titre1(){
    return $this->titre1;
}
function get_entreprise1(){
    return $this->entreprise1;
}
function get_lien1(){
    return $this->lien1;
}

function get_titre2(){
    return $this->titre2;
}
function get_entreprise2(){
    return $this->entreprise2;
}
function get_lien2(){
    return $this->lien2;
}
function get_titre3(){
    return $this->titre3;
}
function get_entreprise3(){
    return $this->entreprise3;
}
function get_lien3(){
    return $this->lien3;
}
function get_titre4(){
    return $this->titre4;
}
function get_entreprise4(){
    return $this->entreprise4;
}
function get_lien4(){
    return $this->lien4;
}
function get_titre5(){
    return $this->titre5;
}
function get_entreprise5(){
    return $this->entreprise5;
}
function get_lien5(){
    return $this->lien5;
}
function get_titre6(){
    return $this->titre6;
}
function get_entreprise6(){
    return $this->entreprise6;
}
function get_lien6(){
    return $this->lien6;
}
}

$Experience = new Experience("Expérience proféssionnelle","Chef des projets technologiques -","@Ets.M DE M","De juillet 2019 à ce jour - http://mdem.cm","Fondateur & DT -","@Tartup ChickDev","De juin 2015 à ce jour - http://chikdev.com","Enseignant -","@Institut Universitaire de la cote","De octobre 2011 à ce jour - http://istdi.com","Dévéloppeur en chef -","@Kayroual group","De Mai 2013 à juin 2015 - http://Khayroual.com","Responsable commercial -","@BAO Sarl","De Décembre 2012 à juin 2013 - http://bao-Sarl.com","stage realisé -","@Creative Sarl","De juin 2021 à aôut 2021 - http://creativesarl.com");
?>