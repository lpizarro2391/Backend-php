<?php
require("./library.php");

$data_file = fopen("./js/users.json","r");
$data_readed = fread($data_file,filesize("./js/users.json"));
$data = json_encode($data_readed,true);




?>