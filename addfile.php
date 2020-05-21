<?php
$titulo = $_POST('titulo');
$texto = $_POST('texto');
$newfile = fopen('./uploaded-files'.$titulo,"w") or die ("Error de archivo");
fwrite($newfile,$texto);
fclose($newfile);



?>