<?php
include 'conexao.php';

if (isset($_GET['id_livro'])) {
    $id_recebido = $_GET['id_livro'];
    $sql = "DELETE FROM livros WHERE id_livro = '$id_recebido'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('location:tabela_livro.php');
    }
}else{
    echo "Erro #404";
    //echo "Nenhum ID detectado";
}

?>