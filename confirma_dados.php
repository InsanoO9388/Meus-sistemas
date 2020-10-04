<?php
	session_start();
	$usuario = array('email' => 'teste@gmail.com', 'senha' => '9412');
	$_POST['email'];
	$_POST['senha'];

	if ($_POST['email'] == $usuario['email'] && $_POST['senha'] == $usuario['senha']) {
			$usuario_autenticado = true;
			header('Location: pagina1.php');

		}else{
			header('Location: index.php?login=erro');

		}


		



?>