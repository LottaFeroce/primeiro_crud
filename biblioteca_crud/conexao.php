<?php

$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "projetoweb";

$conn = new mysqli($dbHost, $dbUsername, $dbPassword,$dbName);

if ($conn->connect_error){
    echo "Error ao conectar no banco";
}else{
    //echo "Conectado com sucesso!";
}

?>