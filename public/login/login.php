<?php
session_start();
include(__DIR__ . "/../../banco/conexao.php");


if(empty($_POST['usuario']) || empty($_POST['senha'])) {
    header("Location: ".BASE_URL."/public/login");
    exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select nome, cargo from usuario where usuario = '{$usuario}' and senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
    $usuario_bd = mysqli_fetch_assoc($result);
    $_SESSION['cargo'] = $usuario_bd['cargo'];
    $_SESSION['nome'] = $usuario_bd['nome'];
    header("Location: ".BASE_URL."/public/");
    exit();
} else {
    $_SESSION['nao_autenticado'] = true;
    header("Location: ".BASE_URL."/public/login");
    exit();
}
