<?php $classMain="container"; include(__DIR__ . "/../../partes/cabecalho.php");
    include(__DIR__ . "/../../banco/conexao.php");
      include(__DIR__ . "/../../banco/banco-categoria.php");
      include(__DIR__ . "/../../banco/banco-produto.php");

$id = $_GET['id'];
$produto = buscaProduto($conexao, $id);

$categorias = listaCategorias($conexao);

$usado = $produto['usado'] ? "checked='checked'" : "";?>

<h1>Alterando produto</h1>
<form action="<?= BASE_URL ?>/public/alterar-produto/altera-produto.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?=$produto['id']?>" />
    <table class="table">
        <tr>
            <td>Nome</td>
            <td><input class="form-control" type="text" name="nome" value="<?=$produto['nome']?>" /></td>
        </tr>
        <tr>
            <td>Preço</td>
            <td><input class="form-control" type="number" name="preco" value="<?=$produto['preco']?>" /></td>
        </tr>
        <tr>
            <td>Descrição</td>
            <td><textarea class="form-control" name="descricao"><?=$produto['descricao']?></textarea></td>
        </tr>
       <tr>
            <td>Quantidade</td>
            <td><input class="form-control" type="number" name="quantidade" value="<?=$produto['quantidade']?>" /></td>
        </tr>
        <tr>
            <td>Categoria</td>
            <td>
                <select class="form-control" name="id_categoria">
                    <?php foreach($categorias as $categoria) :
                        $essaEhACategoria = $produto['categoria_id'] == $categoria['id'];
                        $selecao = $essaEhACategoria ? "selected='selected'" : "";
                    ?>
                        <option value="<?=$categoria['id']?>" <?=$selecao?>>
                            <?=$categoria['nome']?>
                        </option>
                    <?php endforeach ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>imagem</td>
            <td><input required class="form-control" type="file" name="imagem" value="3000" /></td>
        </tr>
        <tr>
            <td><button class="btn btn-primary" type="submit">Alterar</button></td>
        </tr>
    </table>
</form>

<?php include(__DIR__ . "/../../partes/rodape.php"); ?>
