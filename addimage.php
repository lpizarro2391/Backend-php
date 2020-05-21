<?php
$directorio = "uploads/";
$nombreImagen = $_FILES["file"]["name"];
$archivo_a_subir = $directorio.basename($nombreImagen);
$tipoArchivo = pathinfo($archivo_a_subir,PATHINFO_EXTENSION);
$taamano_arhivo = S_FILES["file"]["size"];
$exito = true;
$respuestas;

if (file_exists($archivo_a_subir)){
$respuestas["mensaje"] = "El archivo ya existe: ";
$exito = false;

}

if ($taamano_arhivo > 2000000) {
    $respuestas["mensaje"] = "El archivo es demasiado grande";
    $exito = false;

if ($tipoArchivo !="jpg" && tipoArchivo != "png" && tipoArchivo != "jpeg" && tipoArchivo != "gif"){
    respuestas["mensaje"] = "Solo se permiten archivos JPG,JPEG,PNG & GIF";
    $exito= false;
}

if($exito == false) {
    $respuestas["mensaje"] = "Lo sentimos , tu archivo no fué añadido";
}else{
    if(move_uploaded_file($_FILES["file"]["tmp_name"], $archivo_a_subir)){
        $respuestas["final"] = "El archivo ".basename($nombreImagen)."Ha sido añadido";
        $respuestas["mensaje"] = "";
        $respuestas["newSource"] = $archivo_a_subir;
    }else{
        $respuestas["final"] = "Lo sentimos, tu archivo no fué añadido";
    }
}


}







?>