<?php
include"operaciones.php";
include"vista/tablero.php";


$a = 4;
$b = 6;
$imp = new Visualizador("La suma de ".$a."mas ".$b. "Es igual a: ".sumar($a,$b));
$imp -> mostrarTitulo();


?>


