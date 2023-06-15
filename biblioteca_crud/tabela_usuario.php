<?php
include 'conexao.php';
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
<form>
  <table class="table text-white" id="tabela">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">Email</th>
        <th scope="col">Senha</th>

      </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM usuario";
        $result = mysqli_query($conn, $sql);
        if ($result){
          while ($row = mysqli_fetch_assoc($result)){
            $id_usuario = $row['id_usuario'];
            $nome_usuario = $row['nome_usuario'];
            $email = $row['email'];
            $senha = $row['senha'];
            echo '<tr>
                  <th scope="row">'.$id_usuario.'</th>
                  <td>'.$nome_usuario.'</td>
                  <td>'.$email.'</td>
                  <td>'.$senha.'</td>
                  <td>
                    <a class="btn btn-primary" href="update.php?id_livro='.$id_usuario.'" > <i class="bi bi-pencil-fill"></i></a>
                    <a class="btn btn-danger" href="delete.php?id_livro='.$id_usuario.'"> <i class="bi bi-trash3"></i></a>
                  </td>
                </tr>
                ';
           

          }
        }
      ?>
      
      
    </tbody>
  </table>
</form>
          <a class="btn btn-success" href="library.html">Voltar</a>
</body>
</html>