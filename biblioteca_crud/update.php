<?php
include 'conexao.php';

if (isset($_GET['id_livro'])) {
    $id_recebido = $_GET['id_livro'];
    $sql = "SELECT * FROM livros WHERE id_livro = '$id_recebido'";
    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);

    $id_livro = $row['id_livro'];
    $nome_obra = $row['nome_obra'];
    $categoria = $row['categoria'];
    $preco = $row['preco'];




}

if (isset($_POST['atualizar'])) {

    if(!empty($_POST['nome_obra']) && !empty($_POST['categoria']) && !empty($_POST['categoria'])) {
    $nome_atual = $_POST['nome_obra'];
    $categoria_atual = $_POST['categoria'];
    $preco_atual = $_POST['preco'];
    
}
    $sql = "UPDATE livros SET nome_obra = '$nome_atual', categoria ='$categoria_atual', preco = 'preco_atual' WHERE id_livro = '$id_recebido";
    $result = mysqli_query($conn, $sql);

    if ($result ){ 
        echo '<script>';
        echo 'alert("Atualizado com sucesso");';
        echo '</script>';
    } 

}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8"/>
    <title>Livros</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
</head>
<body>

    <div class="container-fluid pt-5 my-5">
        <div class="text-uppercase font-weight-bold container p-5" id="livro">
            <form method="POST">
                <div class="container text-light"> Atualizar Livro</div>
                <div class="form-group">
                    <label for="nome_obra">Nome da Obra</label>
                    <input type="text" class="form-control" id="nome_obra" name="nome_obra" value="<?php echo $nome_obra ?>">            
                </div>
                <div class="form-group">
                    <label for="categoria">Categoria</label>
                    <input type="text" class="form-control" id="categoria" name="categoria" value="<?php echo $categoria ?>">
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-12 mb-4" id="botoes">
                    <button type="submit" name="atualizar" class="btn btn-primary">Atualizar</button>
                    <button type="reset" class="btn btn-danger">Cancelar</button>
                    <button type="button" class="btn btn-success" action="library.html">Voltar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>
</html>