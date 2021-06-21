<?php $classMain="container"; include(__DIR__ . "/../../partes/cabecalho.php");
include(__DIR__ . "/../../banco/conexao.php");
include(__DIR__ . "/../../banco/banco-categoria.php");
$produtos = buscaProdutoByCategoria($conexao, $_GET['categoria']);
?>

<?php if(!array_key_exists("categoria", $_GET) or empty($produtos)) { ?>
    <p class="alert-danger alert" style="margin-top: 1rem">essa categoria não existe ou não temos nenhum produto nessa categoria</p>
    <?php exit();
}
?>
<h1>Produto listado por categoria</h1>
<?php

include(__DIR__ . "/../../partes/lista-produtos.php");
?>
