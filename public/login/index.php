<?php
$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$base_url = explode('/public/' ,$url)[0];

if (!defined('BASE_URL')) {
    define('BASE_URL', $base_url);
}

session_start();
?>

<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Loja de Auto Peças</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= BASE_URL ?>/assets/css/login.css">
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title" style="color: #27b67c">Sistema de Login</h3>
                    <h3 class="title"><a href="" target="_blank" style="color: #27b67c">Loja de Bicicleta</a></h3>
                    <?php
                    if(isset($_SESSION['nao_autenticado'])):
                    ?>
                    <div class="notification is-danger">
                      <p>ERRO: Usuário ou senha inválidos.</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>
                    <div class="box">
                        <form action="login.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="usuario" name="text" class="input is-large" placeholder="Seu usuário" autofocus="">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="input is-large" type="password" placeholder="Sua senha">
                                </div>
                            </div>

                            <div class="field">
                                <a href="<?= BASE_URL ?>/public/cadastro">Cadastrar</a>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth" style="background-color: #27b67c">Entrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>