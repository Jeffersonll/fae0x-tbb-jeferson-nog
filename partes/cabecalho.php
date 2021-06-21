<?php
include(__DIR__ . "/../public/login/verifica_login.php");
?>
<html>
<head>
    <title>Minha loja</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= BASE_URL ?>/assets/css/bootstrap.css" rel="stylesheet" />
    <link href="<?= BASE_URL ?>/assets/css/main.css" rel="stylesheet" />
    <link href="<?= BASE_URL ?>/assets/css/loja.css" rel="stylesheet" />
</head>
<body style="padding:0;margin:0;">
    <header>
        <div class="header__container">
            <div class="header__main">
                <a href="<?= BASE_URL ?>/public/" class="navbar-brand header__title">Minha Loja</a>
            </div>
            <div class="header__itens">
                <ul class="header__list">
                    <?php
                    if (!(empty($_SESSION['cargo'])) && ($_SESSION['cargo'] == 'adm')) { ?>
                    <li><a href="<?= BASE_URL ?>/public/adicionar-produto">Adiciona Produto</a></li>
                    <li><a href="<?= BASE_URL ?>/public/produto-lista">Produtos</a></li>
                    <?php } ?>
                    <li><a href="<?= BASE_URL ?>/public/sobre">Sobre</a></li>
                </ul>
                <ul class="header__list">
                    <?php if (!empty($_SESSION['nome'])) { ?>
                    <li style="padding: 1.5rem;color: #8d9d9d"><?php echo $_SESSION['nome']; ?></li>
                    <li><a href="<?= BASE_URL ?>/public/login/logout.php" id="exit">sair</a></li>
                    <?php } else {?>
                    <li><a id="login" href="<?= BASE_URL ?>/public/login">Logar</a></li>
                    <?php }?>
                </ul>
            </div>
        </div>
    </header>

    <main class="<?= $classMain ?>">