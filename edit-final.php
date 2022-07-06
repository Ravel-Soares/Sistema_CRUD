<?php

include 'conexao.php';

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email =  filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);

$result = $connection->query("UPDATE usuario SET nome = '$nome', email = '$email', senha = '$senha' WHERE id = '$id'");

header('location: index.php');
?>

