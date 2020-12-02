<?php
	session_start();
	$usuario = array(
		array('id' => 1, 'email' => 'guilermeextreme@gmail.com', 'senha' => '9412'),
		array('id' => 2, 'email' => 'teste@gmail.com', 'senha' => '9412'),
);


	foreach ($usuario as $user) {
		if ($_POST['email'] == $user['email'] && $_POST['senha'] == $user['senha']) {
		$usuario_autenticado = true;
		$usuario_id = $user['id'];
		header('Location: pagina1.php');

		}
	}
	if ($usuario_autenticado) {
		$_SESSION['autenticado'] = 'SIM';
		$_SESSION['id'] = $usuario_id;

	}else{
		$_SESSION['autenticado'] = 'NAO';
		header('Location: index.php?login=erro');
	}


		



?>