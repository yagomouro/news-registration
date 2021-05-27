<?php 
	$pdo = new PDO("mysql:host=localhost;dbname=noticia", "root", "root"); 
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>