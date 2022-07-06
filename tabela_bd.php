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
   <!-- TABELA DO BANCO DE DADOS// -->
        </DIV>
        </header>
   </div>
   <!-- BOTÕES DE OPÇÃO -->
   <div class="config_banco" style="padding: 10px;">

   <div class="botao-opcao">
    <a class="itens-config" href="">
   <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
  </svg>
   </a>
   </div>


  <div class="botao-opcao">
     <a href="itens-config">
   <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
   <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
   </svg>
   </a>
  </div>


   <div class="botao-opcao">
        <a href="itens-config">
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
      <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
      </svg>
   </a>
   </div>
      <!-- BOTÕES DE OPÇÃO // -->

   <!-- ATUALIZAR BANCO  -->
   <div class="opcoes_configura">
     <form action="atualizar.php" method="POST">
       <label class="titulo-opcoes">Nome</label>
     <input class="input-opcoes" type="text" name="nome">
     <br>

      <label class="titulo-opcoes">E-mail</label>
     <input class="input-opcoes" type="email" name="email">
     <br>
      <label class="titulo-opcoes">Senha</label>
     <input class="input-opcoes" type="password" name="senha">
     <br>
     <div class="">
       <input type="submit" value="Atualizar" name="Adcionar" class="botao-opcoes">
     </div>
     </form>
     <!-- ATUALIZAR BANCO//  -->
   </div>

   </div>
    </main>

    </script>



</body>
</html>