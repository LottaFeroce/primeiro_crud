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
        <th scope="col">Livro</th>
        <th scope="col">Categoria</th>
        <th scope="col">Preco</th>
        <th scope="col">Editora</th>
        <th scope="col">Ação</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $sql = "SELECT * FROM livros";
        $result = mysqli_query($conn, $sql);
        if ($result){
          while ($row = mysqli_fetch_assoc($result)){
            $id_livro = $row['id_livro'];
            $nome_obra = $row['nome_obra'];
            $categoria = $row['categoria'];
            $preco = $row['preco'];
            echo '<tr>
                  <th scope="row">'.$id_livro.'</th>
                  <td>'.$nome_obra.'</td>
                  <td>'.$categoria.'</td>
                  <td>'.$preco.'</td>
                  <td>
                    <a class="btn btn-primary" href="update.php?id_livro='.$id_livro.'" > <i class="bi bi-pencil-fill"></i></a>
                    <a class="btn btn-danger" href="delete.php?id_livro='.$id_livro.'"> <i class="bi bi-trash3"></i></a>
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