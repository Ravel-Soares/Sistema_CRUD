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
      <a href="">
      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-check-square-fill" viewBox="0 0 16 16">
      <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z"/>
      </svg>
      </a> 
    </td>
    </tr>
    <?php }  ?>
  </table>
        </DIV>
        </header>
   </div>
    </main>

    </script>
  </body>
</html>







