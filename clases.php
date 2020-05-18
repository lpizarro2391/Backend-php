<?php
        
 class Auto{

    protected $cilindrajes;

    private $modelo;

    public function arrancar($velocidad){
        echo "<p>el auto ha arrancado a una velocidad de: ".$velocidad."km/h</p>";

    }
 }       

 $a = new Auto();

 echo $a->arrancar(20)
  


?>




