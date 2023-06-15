<?php
include 'conexao.php';

$nome_editora = $_POST['nome_editora'];
$email = $_POST['email'];


$sql = "INSERT INTO editora (nome_editora,email) VALUES ('$nome_editora','$email')";
$result = mysqli_query($conn, $sql);

if ($result){
    echo "Dados cadastrados com sucesso!!";
    header('location:library.html');
}else{
    echo "Error ... heheheha";
}
?>