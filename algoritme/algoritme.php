<?php

class Input_form{

  function __construct($leeftijd, $geslacht, $school, $roots, $religion){

   $this->leeftijd = $leeftijd;
   $this->geslacht = $geslacht;
   $this->school = $school;
   $this->roots = $roots;
   $this->religion = $religion;


 }

 public function isaccepted(){
   if($this->leeftijd > 50){
     print_r("false");
      return false;
   }
   if($this->roots <= 0){
     print_r("false");
      return false;
   }
   if($this->school >= 6){
     print_r("false");
      return false;
   }
   if($this->geslacht == "vrouw"){
     print_r("false");
      return false;
   }
   if($this->religion <= 3){
         print_r("false");
         return false;
     }
   print_r("true");
   return true;
}

}

//$Marie = new Input_form(30, "Vrouw", "MBO", "Nederlands", "Katholiek");
//$Marie->isaccepted();

?>
