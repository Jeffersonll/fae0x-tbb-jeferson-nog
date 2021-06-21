<?php
session_start();

$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if ($_GET) {
    $url = preg_replace('/\?+([a-z=A-Z]|[0-9])+/', '', $url);
}

$base_url = explode('/public/' ,$url)[0];

if (!defined('BASE_URL')) {
    define('BASE_URL', $base_url);
}

$validUserDefault = [BASE_URL.'/public/',BASE_URL.'/public/index.php',BASE_URL.'/public/sobre/', BASE_URL.'/public/produto/', BASE_URL.'/public/produto/index.php', BASE_URL.'/public/obrigado/', BASE_URL.'/public/categoria/index.php'];


if((empty($_SESSION['cargo']) or  $_SESSION['cargo'] != 'adm') && !in_array($url, $validUserDefault)) {
	header("Location: ".BASE_URL."/public/login");
	exit();
}
