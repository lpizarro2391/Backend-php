<?php
$titulo = $_POST("titulo");
$file = fopen(".uploaded-files/".$titulo,"r");
$response["contenido"] = fread($file,filesize(".uploaded-files/".$titulo));
$response["titulo"] = $titulo;
echo json_encode($response);
fclose($file);
?>