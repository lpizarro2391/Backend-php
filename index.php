<?php
$persona1 ='pedro';
$persona2 = 'Juan';
$_persona3 ='Maria';

function saludar(){
    global $persona1;
    echo "hola"." " .$persona1;
}
saludar()
?>
