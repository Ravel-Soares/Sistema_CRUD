<?php
include('conexao.php');

$nome = $_POST['nome'];
$senha = $_POST['senha'];
$email = $_POST['email'];


$query = mysqli_query($connection, "INSERT INTO usuario (nome , email , senha) values ('$nome' , '$email' , '$senha')");

header('location: index.php');


?>
