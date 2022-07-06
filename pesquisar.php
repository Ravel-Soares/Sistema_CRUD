<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link rel="stylesheet" href="./estilos/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </head>
  <body>
   
   <main class="conteudo">
   <div class="tabela_do_banco center">
    
   <header >
    <?php
    include 'conexao.php';
    $query = $connection->query("SELECT * FROM usuario");
    $exibe = mysqli_fetch_assoc($query);
    $consulta = $connection->query("SELECT * FROM usuario")
    ?>

           <!-- EMOTE DE PESQUISAR -->
     <form action="pesquisar.php" method="POST">
     <button type="submit"  style="border: none ; background-color: none;">
       <svg 
        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search m-3" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
        </svg>    
       </button>
          <!-- EMOTE DE PESQUISAR// -->

        <input type="text" id="pesquisa" name="pesquisa" class="pesquisar" placeholder="procure um nome">
     </form>
     <ul class="resultado"></ul>
        
        <DIV>
        <table class="table table-hover tabela">
    <tr>
      <td>Nome</td>
      <td>sobrenome</td>
      <td>email</td>
      <td>senha</td>
      <td>ação</td>
      
    </tr>
    <?php 
    $pesquisa = $_POST['pesquisa'];
    $pesquisa_nome = "SELECT * FROM usuario WHERE nome LIKE '%$pesquisa%'";
    $result_pesquisa = mysqli_query($connection , $pesquisa_nome);
    while ($dado = mysqli_fetch_array($result_pesquisa)) { ?>
    <tr>
    <td> <?php echo $dado["id"]; ?> </td>
    <td> <?php echo $dado["nome"];?> </td>
    <td> <?php echo $dado["email"]; ?> </td>
    <td> <?php echo $dado["senha"]; ?> </td>
    <td>
   <div>
        <a style="margin: 0 10px 0 0 ;" href="editar.php?editar=<?php echo $dado['id'] ?>">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
        <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
      </svg>
      </a> 

         <a style="margin: 0 10px 0 0 ;" href="apagar.php?apagar=<?php echo $dado['id'] ?>">
      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
      <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
      </svg>
      </a> 
   </div>
      
    </td>
    </tr>
    <?php }  ?>
  </table>
       <!-- TABELA DO BANCO DE DADOS// -->
    </DIV>
        </header>
   </div>
   <!-- BOTÕES DE OPÇÃO -->
   <div class="config_banco" style="padding: 10px;">

    <div>
      <h1 style="color: #0d6efd ;">Adcionar um usuario</h1>
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
       <input type="submit" value="Adcionar" name="Adcionar" class="botao-opcoes">
     </div>
     </form>
     <!-- ATUALIZAR BANCO//  -->
   </div>

   </div>
    </main>

    </script>

  </body>
</html>







