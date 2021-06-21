<?php
session_start();
if($_SESSION['cargo'] != 'adm') {
	header('Location: /login/');
	exit();
}