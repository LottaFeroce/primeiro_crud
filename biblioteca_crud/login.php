<?php
include 'conexao.php';

$nome_usuario = $_POST['nome_usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "INSERT INTO usuario (nome_usuario,email,senha) VALUES ('$nome_usuario','$email','$senha')";
$result = mysqli_query($conn, $sql);

if ($result){
    echo "Dados cadastrados com sucesso!!";
    header('location:library.html');
}else{
    echo "Error ... heheheha";
}
?>