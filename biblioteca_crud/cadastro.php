<?php
include 'conexao.php';

if (isset($_POST['enviar'])) {

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuario WHERE email LIKE '$email' and senha LIKE '$senha'";
$result = mysqli_query($conn, $sql);

$row_cnt = mysqli_num_rows($result);
 
    if ($row_cnt == 1){
        header('location:library.html');
    }else{
        echo '<script language="javascript">';
        echo 'alert("Login ou Senha Inválido!!")';
        echo '</script>';
        //echo '<meta http-equiv="refresh" content="0.2; url=./cadastro.php">';
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
                <div class="form-group">
                    <label for="nome_usuario">Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email: ">            
                </div>
                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha: ">            
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-12 mb-4" id="botoes">
                    <button type="submit" class="btn btn-primary" name="enviar">Enviar</button>
                    <button type="reset" class="btn btn-danger">cancelar</button>
                    <button class="btn btn-success" href="library.html">Voltar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>
</html>