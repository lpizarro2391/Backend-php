<?php
$directorio = "uploads/";
$nombreImagen = $_FILES["file"]["name"];
$archivo_a_subir = $directorio.basename($nombreImagen);
?>