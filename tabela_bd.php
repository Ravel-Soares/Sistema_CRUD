<?php
include 'conexao.php';
$consulta = $connection->query("SELECT * FROM usuario")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- links do bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilo.css">
    <!-- links do bootstrap// -->
</head>
<body>
    
<table class="table table-hover tabela">
    <tr>
      <td>Nome</td>
      <td>sobrenome</td>
      <td>email</td>
      <td>senha</td>
      <td>ação</td>
      
    </tr>
    <?php while ($dado = mysqli_fetch_array($consulta)) { ?>
    <tr>
    <td> <?php echo $dado["id"]; ?> </td>
    <td> <?php echo $dado["nome"];?> </td>
    <td> <?php echo $dado["email"]; ?> </td>
    <td> <?php echo $dado["senha"]; ?> </td>
    <td> <a href=""><i class="bi bi-pencil"></i></a> </td>
    </tr>
    <?php }  ?>
  </table>
</body>
</html>