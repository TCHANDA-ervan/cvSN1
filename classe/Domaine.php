<?php
class Domaine{
    public $formation1;
    public $formation2;
    public $formation3;
    public $formation4;
    public $formation5;
    public $formation6;
    
    
    

  function __construct($formation1, $formation2, $formation3, $formation4,$formation5, $formation6)
{
    $this->formation1=$formation1;
    $this->formation2=$formation2;
    $this->formation3=$formation3;
    $this->formation4=$formation4;
    $this->formation5=$formation5;
    $this->formation6=$formation6;
   
}
function get_formation1(){
    return $this->formation1;
}
function get_formation2(){
    return $this->formation2;
}
function get_formation3(){
    return $this->formation3;
}
function get_formation4(){
    return $this->formation4;
}
function get_formation5(){
    return $this->formation5;
}
function get_formation6(){
    return $this->formation6;
}
}

$Domaine = new Domaine("HTML5, SASS, VueJS, Angular, JavaFX, ...","NodeJS, Drupal 8, Laravel, Kotlin, JavaEE 7, ...","Android Kotlin, IOS Swift, Cordova, Flutter, ...","Photoshop CC, Adobe XD, Matérial Design, ...","Oracle 11g, PostgreSQL, Hadoop, Talent DI, ...","Visual Paradigm, Git, Docker, K8s, Linux, ...");
?>