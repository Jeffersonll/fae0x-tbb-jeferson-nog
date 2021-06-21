<?php $classMain="container"; include(__DIR__."/../partes/cabecalho.php");
      include(__DIR__."/../banco/conexao.php");
      include(__DIR__."/../banco/banco-produto.php"); ?>

<?php if(array_key_exists("removido", $_GET) && $_GET['removido']=='true') { ?>
    <p class="alert-success">Produto apagado com sucesso.</p>
<?php } ?>

<table class="table table-striped table-bordered" style="margin-top:2rem">

    <?php
        $produtos = listaProdutos($conexao);
        foreach($produtos as $produto) :
    ?>
    <tr>
        <td><?= $produto['nome'] ?></td>
        <td><?= $produto['preco'] ?></td>
        <td><?= substr($produto['descricao'], 0, 40) ?></td>
        <td><?= $produto['categoria_nome'] ?></td>
        <td><a class="btn btn-primary" href="/alterar-produto/index.php?id=<?=$produto['id']?>">alterar</a></td>
        <td>
            <form action="remove-produto.php" method="post">
                <input type="hidden" name="id" value="<?=$produto['id']?>" />
                <button class="btn btn-danger">remover</button>
            </form>
        </td>
    </tr>
    <?php
        endforeach
    ?>
</table>
<?php include(__DIR__."/../partes/rodape.php"); ?>
