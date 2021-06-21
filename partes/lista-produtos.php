<div class="container_produtos">
<?php
    foreach($produtos as $produto) :
?>

        <a style="color: inherit; text-decoration: none" href="<?= BASE_URL ?>/public/produto/index.php?id=<?= $produto['id'] ?>" class="produtos__produto">
            <div class="produtos__produto__image">
                <img src="<?= BASE_URL ?>/assets/imagens/<?php echo $produto['imagem']; ?>">
            </div>
            <div class="produtos__produto__desc">
                <h1 class="produtos__produto__title"><?= $produto['nome'] ?></h1>
                <p>quantidade: <span class="cab"><?= $produto['quantidade'] ?></span></p>
                <span class="price">R$<?= $produto['preco'] ?></span>
            </div>
        </a>
<?php
    endforeach
?>
</div>