<?php
require("./library.php");

$data_file = fopen("./js/users.json","r");
$data_readed = fread($data_file,filesize("./js/users.json"));
$data = json_encode($data_readed,true);

$user_ingresado = $_POST['username'];
$password_ingresado = $_POST['password'];

if(checkLogin($user_ingresado,$password_ingresado,$data)){
    setcookie('saludo','Bienvenido de nuevo',time()+(84600),"/");
    echo "true";

}else{
    echo "false";
}

fclose($data_file);


?>