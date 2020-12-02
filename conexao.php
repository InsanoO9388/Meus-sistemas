<?php 

	$dsn = 'mysql:host=localhost;dbname=sistema_compromissos';
	$user = 'root';
	$pass = '';

	try{
	$pdo = new PDO ($dsn, $user, $pass);
		}
	catch(PDOException $ex){
			echo "ERRO: ".$ex->getMessage();
		}
		


?>