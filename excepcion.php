<?php

include "excepciones.php";

function dividir($num1,$num2){
if ($num2 == 0){
    throw new DivisionEntreCero();
}

if($num1 < 0 || $num2 < 0){
    throw new NumeroNegativo();
}

return $num1/$num2;

}

try{
    echo dividir(6,-2);

}catch(DivisionEntreCero $ecero){
    echo "Se presentó un Error ".$ecero->mensajeError();
}catch(NumeroNegativo $enegativo){
    echo "Se presentó un error: ". $enegativo->mensajeError();
}finally{
    echo "<p>Se realizo una división</p>";
}


?>