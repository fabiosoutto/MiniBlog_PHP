<?php
	include_once("helpers/url.php");
	include_once("data/posts.php");
	include_once("data/categories.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
	<title>Blog FSDev</title>
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<header>
		<a href="<?= $BASE_URL ?>" id="logo">
			<img src="<?= $BASE_URL ?>/img/fsdev-logo.png" alt="Blog logo">
		</a>
		<nav>
			<ul id="navbar">
				<li><a href="<?= $BASE_URL ?>" class="nav-link">Home</a></li>
				<li><a href="#" class="nav-link">Categorias</a></li>
				<li><a href="<?= $BASE_URL ?>sobre.php"" class="nav-link">Sobre</a></li>
				<li><a href="<?= $BASE_URL ?>contato.php" class="nav-link">Contato</a></li>
			</ul>
		</nav>
	</header>