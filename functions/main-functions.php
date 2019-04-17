<?php 
	
	// --- Connexion à la base de données ---

	$dbhost = 'localhost';
	$dbname = 'blog-mar';
	$dbuser = 'root';
	$dbpassword = 'root';

	try{
		$db = new PDO('mysql:host='.$dbhost.';dbname='.$dbname,$dbuser,$dbpassword,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
	}
	catch(PDOexception $e)
	{
		die("Une erreur est survenue lors de la connexion à la base de données");
	}