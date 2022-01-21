<?php
class Profil{
    public $naissance;
    public $origine;
    public $matrimoniale;
    public $quartier;
    public $VillePays;
    public $map;
    public $tel;
    public $reseau;
    public $mail;
    public $lien;
    
    
    

  function __construct($naissance, $origine, $matrimoniale, $quartier,$VillePays, $map, $tel, $reseau, $mail, $lien)
{
    $this->naissance=$naissance;
    $this->origine=$origine;
    $this->matrimoniale=$matrimoniale;
    $this->quartier=$quartier;
    $this->VillePays=$VillePays;
    $this->map=$map;
    $this->tel=$tel;
    $this->reseau=$reseau;
    $this->mail=$mail;
    $this->lien=$lien;
    
}
function get_naissance(){
    return $this->naissance;
}
function get_origine(){
    return $this->origine;
}
function get_matrimoniale(){
    return $this->matrimoniale;
}
function get_quartier(){
    return $this->quartier;
}

function get_VillePays(){
    return $this->VillePays;
}
function get_map(){
    return $this->map;
}
function get_tel(){
    return $this->tel;
}
function get_reseau(){
    return $this->reseau;
}
function get_mail(){
    return $this->mail;
}
function get_lien(){
    return $this->lien;
}

}

$Profil = new Profil("Née le 31 janvier 2001","Originaire de l'Ouest cameroun","Célibataire,0 enfant - Santé RAS","Résidence à Logpom","Douala - Cameroun","Map :1.053276? 45885555","(237) 699 899 263","Mobile, Telegram, Whatsapp","ervanjre@gmail.com","Google+, Twitter, Linkedlin, Github");
?>