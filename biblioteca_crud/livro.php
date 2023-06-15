<?php
include 'conexao.php';

$nome_obra = $_POST['nome_obra'];
$categoria = $_POST ['categoria'];
$preco = $_POST ['preco'];

$sql = "INSERT INTO livros (nome_obra,categoria,preco) VALUES ('$nome_obra','$categoria','$preco')";
$result = mysqli_query($conn, $sql);

if ($result){
    echo "Dados cadastrados com sucesso!!";
    header('location:library.html');
}else{
    echo "Error ... heheheha";
}
?>