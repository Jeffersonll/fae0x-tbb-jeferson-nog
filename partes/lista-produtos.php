<?php
include(__DIR__."/../banco/conexao.php");
include(__DIR__."/../banco/banco-produto.php"); ?>

<div class="container_produtos">
<?php
    $produtos = listaProdutos($conexao);
    foreach($produtos as $produto) :
?>

        <div class="produtos__produto">
            <div class="produtos__produto__image">
                <img src="/assets/imagens/<?php echo $produto['imagem']; ?>">
            </div>
            <div class="produtos__produto__desc">
                <h1 class="produtos__produto__title"><?= $produto['nome'] ?></h1>
                <p>quantidade: <span class="cab"><?= $produto['quantidade'] ?></span></p>
                <span class="price">R$<?= $produto['preco'] ?></span>
            </div>
        </div>
<?php
    endforeach
?>
</div>