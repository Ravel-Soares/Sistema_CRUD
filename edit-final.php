<?php

include 'conexao.php';

$id = $_POST["id"];
$nome = $_POST["nome"];
$email =  $_POST["email"];
$senha = $_POST["senha"];

$sql = "UPDATE usuario SET nome = '$nome', email = '$email', senha = '$senha' WHERE id = '$id'";
$rs = mysqli_query($connection,$sql);

header('location: index.php');
?>

