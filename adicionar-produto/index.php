<?php $classMain = "container"; include(__DIR__."/../partes/cabecalho.php");
      include(__DIR__."/../banco/conexao.php");
      include(__DIR__."/../banco/banco-categoria.php");

$categorias = listaCategorias($conexao);
?>

<h1>Formulário de cadastro</h1>
<form action="adiciona-produto.php" method="post" enctype="multipart/form-data">
    <table class="table">
        <tr>
            <td>Nome</td>
            <td><input class="form-control" type="text" name="nome" /></td>
        </tr>
        <tr>
            <td>Preço</td>
            <td><input class="form-control" type="number" name="preco" /></td>
        </tr>
        <tr>
            <td>Descrição</td>
            <td><textarea class="form-control" name="descricao"></textarea></td>
        </tr>
       <tr>
            <td>Quantidade</td>
            <td><input class="form-control" type="number" name="quantidade" /></td>
        </tr>
        <tr>
            <td>Categoria</td>
            <td>
                <select class="form-control" name="id_categoria">
                    <?php foreach($categorias as $categoria) : ?>
                        <option value="<?=$categoria['id']?>"><?=$categoria['nome']?></option>
                    <?php endforeach ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>imagem</td>
            <td><input required accept="image/x-png,image/jpeg" class="form-control" type="file" name="imagem" value="3000" /></td>
        </tr>
        <tr>
            <td><button class="btn btn-primary" type="submit">Cadastrar</button></td>
        </tr>
    </table>
</form>

<?php include(__DIR__."/../partes/rodape.php"); ?>
