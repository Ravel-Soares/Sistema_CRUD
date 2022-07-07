<?php 
  include 'conexao.php';
  $atualizar = $_GET['editar'];
  $atualizei = $connection->query("SELECT * FROM usuario WHERE id = '$atualizar'");
  $edit = mysqli_fetch_assoc($atualizei);
  ?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Editar</title>
    <link rel="stylesheet" href="./estilos/estilo.css">
    <link rel="stylesheet" href="./estilos/edit.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</head>
<body>


 <!-- BOTÕES DE OPÇÃO -->
   <div class="editar_dados" style="padding: 10px;">

  <div class="titulo_atualiza text-center" style="color: #0d6efd ;">
    <h1>Atualizar dados</h1>
  </div>
   <!-- ATUALIZAR BANCO  -->
   <div class="opcoes_configura">
     <form action="edit-final.php" method="POST">

      <input class="input-opcoes" value="<?php echo $edit['id']  ?>" type="hidden" name="id">
       <label class="titulo-opcoes">Nome</label>
     <input class="input-opcoes" value="<?php echo $edit['nome']  ?>" type="text" name="nome">
     <br>

      <label class="titulo-opcoes">E-mail</label>
     <input class="input-opcoes" value="<?php echo $edit['email']  ?>" type="email" name="email">
     <br>
      <label class="titulo-opcoes">Senha</label>
     <input class="input-opcoes" value="<?php echo $edit['senha']  ?>" type="text" name="senha">
     <br>
     <div class="">
       <input type="submit" value="Atualizar" name="atualizar" class="btn btn-primary center">
     </div>

     </form>
     <!-- ATUALIZAR BANCO//  -->

</body>
</html>