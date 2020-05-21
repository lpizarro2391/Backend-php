<?php
$directorio = "uploads/";
$nombreImagen = $_FILES["file"]["name"];
$archivo_a_subir = $directorio.basename($nombreImagen);
$tipoArchivo = pathinfo($archivo_a_subir,PATHINFO_EXTENSION);
$taamano_arhivo = S_FILES["file"]["size"];
$exito = true;
$respuesta;

if (file_exists($archivo_a_subir)){
$respuesta["mensaje"] = "El archivo ya existe: ";
$exito = false;

}

if ($taamano_arhivo > 2000000) {
    $respuesta["mensaje"] = "El archivo es demasiado grande";
    $exito = false;

if ($tipoArchivo !="jpg" && tipoArchivo != "png" && tipoArchivo != "jpeg" && tipoArchivo != "gif"){
    respuestas["mensaje"] = "Solo se permiten archivos JPG,JPEG,PNG & GIF";
    $exito= false;
}

}







?>