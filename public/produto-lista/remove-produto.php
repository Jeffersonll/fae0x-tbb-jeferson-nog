<?php include(__DIR__ . "/../../partes/cabecalho.php");
    include(__DIR__ . "/../../banco/conexao.php");
      include(__DIR__ . "/../../banco/banco-produto.php");

$id = $_POST['id'];
removeProduto($conexao, $id);

header("Location: ".BASE_URL."/public/produto-lista/index.php?removido=true");
die();
?>
