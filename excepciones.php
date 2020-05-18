<?php

class DivisionEntreCero extends Exception{
    
    function mensajeError(){
        return "No puedes hacer una division entre cero";
    }

}

class NumeroNegativo extends Exception{

     function mensajeError(){
        return "No puedes usar numeros negativos en esta division";
    }

}

?>