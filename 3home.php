<?php
session_start();
if (!isset($_SESSION['nombre'])){
    $response['msj'] = "false";
}  else{
    $response['msj'] = "true";
    $response['nombre']= $_SESSION['nombre'];
    $response['img'] = $_SESSION['img-profile'];
}
echo json_encode($response);
?>