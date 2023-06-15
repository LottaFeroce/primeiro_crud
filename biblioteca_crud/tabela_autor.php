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
        <th scope="col">Autor</th>
        <th scope="col">Obras</th>
        <th scope="col">Contato</th>

      </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM autor";
        $result = mysqli_query($conn, $sql);
        if ($result){
          while ($row = mysqli_fetch_assoc($result)){
            $id_autor = $row['id_autor'];
            $nome_autor = $row['nome_autor'];
            $nome_obra = $row['nome_obra'];
            $email = $row['email'];
            echo '<tr>
                  <th scope="row">'.$id_autor.'</th>
                  <td>'.$nome_autor.'</td>
                  <td>'.$nome_obra.'</td>
                  <td>'.$email.'</td>
                  <td>
                    <a class="btn btn-primary" href="update.php?id_livro='.$id_autor.'" > <i class="bi bi-pencil-fill"></i></a>
                    <a class="btn btn-danger" href="delete.php?id_livro='.$id_autor.'"> <i class="bi bi-trash3"></i></a>
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