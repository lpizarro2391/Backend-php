<?php
$persona1 ='pedro';
$persona2 = 'Juan';
$_persona3 ='Maria';

function saludar(){
    global $persona1;
    echo "hola"." " .$persona1;
}



$a = true;
$b = 2;
$c = 2.76;
$d = 'a';
$e = [3,5,6];
$f = new stdClass();
$g = NULL;

echo " ".gettype($a);
echo " ".gettype($b);
echo " ".gettype($c);
echo " ".gettype($d);
echo " ".gettype($e);
echo " ".gettype($f);
echo " ".gettype($g);

?>

