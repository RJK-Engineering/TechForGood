<?php

class Input_form{

  function __construct($leeftijd, $sekse, $opleiding, $etniciteit, $religie){

   $this->leeftijd = $leeftijd;
   $this->sekse = $sekse;
   $this->opleiding = $opleiding;
   $this->etniciteit = $etniciteit;
   $this->religie = $religie;


 }

 public function isaccepted(){
   if($this->leeftijd > 50){
     print_r("false");
      return false;
   }
   if($this->etniciteit != "Nederlands"){
     print_r("false");
      return false;
   }
   if($this->opleiding != "HBO"){
     print_r("false");
      return false;
   }
   if($this->sekse == "Vrouw" && $this->religie !=="Katholiek"){
     print_r("false");
      return false;
   }
   print_r("true");
   return true;
}

}

$Marie = new Input_form(30, "Vrouw", "MBO", "Nederlands", "Katholiek");
$Marie->isaccepted();

?>
