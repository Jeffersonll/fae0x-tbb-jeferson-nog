<?php $classMain="container"; include(__DIR__ . "/../../partes/cabecalho.php");
include(__DIR__ . "/../../banco/conexao.php");
include(__DIR__ . "/../../banco/banco-produto.php"); ?>

<?php if(!array_key_exists("id", $_GET) or empty(buscaProduto($conexao, $_GET['id']))) { ?>
    <p class="alert-danger alert" style="margin-top: 1rem">esse produto não existe o produto.</p>
<?php exit();
} ?>

<?php
$produto = buscaProduto($conexao, $_GET['id']);
?>

<section class="produto_only">
    <div class="produto_only__box">
        <div class="produto_only__box__image">
            <img src="<?= BASE_URL ?>/assets/imagens/<?php echo $produto['imagem']; ?>" alt="">
        </div>
        <span class="produto_only__box__name"><?= $produto['nome']?></span>
    </div>
    <div class="produto_only__venda">
        <h2 class="produto_only__venda__name"><?= $produto['nome']?></h2>
        <p class="produto_only__venda__quantidade">quantidade: <span class="cab"><?= $produto['quantidade'] ?></span></p>
        <span class="produto_only__venda__price price">R$<?= $produto['preco']?></span><br>
        <a href="<?= BASE_URL ?>/public/obrigado" class="produto_only__venda__btn btn-primary btn">Comprar</a>
    </div>
</section>

<section class="produto_only__desc">
    <h3 class="produto_only__desc__title">Descrição</h3>
    <?= $produto['descricao']?>
</section>

<?php include(__DIR__ . "/../../partes/rodape.php");