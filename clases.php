<?php
        
 class Auto{

    protected $cilindrajes;

    private $modelo;

    public static $peso;

    const RUEDAS = 4;

    public __construct($cilindraje,$peso,$modelo)
    {
        $this ->$cilindraje = $cilindraje;
        $this->$modelo = $modelo;
        $this->$peso = $peso;
    }

    public function arrancar($velocidad){
        echo "<p>el auto ha arrancado a una velocidad de: ".$velocidad."km/h</p>";

    }
 }       

 $a = new Auto(1300,'2010',215);

 echo $a->arrancar(20);
  
 echo Auto::RUEDAS;


?>




