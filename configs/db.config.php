<?php
	// pdo database connection
	try{
		// connects using mysql connection information
		$pdo = new PDO('mysql:host=localhost;dbname=devlist', 'root', '');
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$pdo->exec('SET NAMES "utf8"');
	// if connection fails
	}catch(PDOException $e){
		echo "There was a problem connecting to your datase" . "<br />" . $e->getMessage();
		exit();
	}
?>