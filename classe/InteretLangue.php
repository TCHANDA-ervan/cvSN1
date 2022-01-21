<?php
class InteretLangue{
    public $point_interet;
    public $langue;
    

function __construct($point_interet,$langue)
{
    $this->point_interet=$point_interet;
    $this->langue=$langue;
    
}
function get_point_interet(){
    return $this->point_interet;
}
function get_langue(){
    return $this->langue;
}

}
$InteretLangue = new InteretLangue("Point d interets","Langues");
?>

