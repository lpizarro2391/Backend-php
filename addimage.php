<?php
$directorio = "uploads/";
$nombreImagen = $_FILES["file"]["name"];
$archivo_a_subir = $directorio.basename($nombreImagen);
$tipoArchivo = pathinfo($archivo_a_subir,PATHINFO_EXTENSION);
$taamanoarhivo = S_FILES["file"]["size"];
$exito = true;
$respuesta;








?>