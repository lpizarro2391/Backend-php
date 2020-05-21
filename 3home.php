<?php
session_start();
if (!isset($_SESSION['nombre'])){
    $response['msj'] = "false";
}
?>