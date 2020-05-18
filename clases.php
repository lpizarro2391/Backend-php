<?php
        
 class Auto{

    protected $cilindrajes;

    private $modelo;

    public static $peso;

    const RUEDAS = 4;

    public function arrancar($velocidad){
        echo "<p>el auto ha arrancado a una velocidad de: ".$velocidad."km/h</p>";

    }
 }       

 $a = new Auto();

 echo $a->arrancar(20);
  
 echo Auto::RUEDAS;


?>




