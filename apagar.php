<?php

include 'conexao.php';

$apagar_registro = $_GET['apagar'];

$apagando = $connection->query("DELETE FROM usuario WHERE id = '$apagar_registro'");

header('location: index.php');

?>