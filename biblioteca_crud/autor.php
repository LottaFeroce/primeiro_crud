<?php
include 'conexao.php';

$nome_autor = $_POST['nome_autor'];
$nome_obra = $_POST ['nome_obra'];
$email = $_POST['email'];

$sql = "INSERT INTO autor (nome_autor,nome_obra,email) VALUES ('$nome_autor','$nome_obra','$email')";
$result = mysqli_query($conn, $sql);

if ($result){
    echo "Dados cadastrados com sucesso!!";
    header('location:library.html');
}else{
    echo "Error ... heheheha";
}
?>