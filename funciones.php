<?php

function saludar(){
    echo "<p>Hola como esta?</p>";
}

saludar();

function sumar($numero1,$numero2){
    $suma = $numero1 + $numero2;
    return($suma);

}
    $resultadoDeLaSuma=sumar(2,3);
 
    echo $resultadoDeLaSuma;


?>