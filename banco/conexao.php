<?php
define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'ecomerce_ciclismo');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar ao banco de dados.');

$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$base_url = explode('/public/' ,$url)[0];

if (!defined('BASE_URL')) {
    define('BASE_URL', $base_url);
}
