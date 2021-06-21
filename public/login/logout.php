<?php
session_start();
session_destroy();
$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$base_url = explode('/public/' ,$url)[0];

if (!defined('BASE_URL')) {
    define('BASE_URL', $base_url);
}
header("Location: ".BASE_URL."/public/login");
exit();