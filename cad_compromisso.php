<?php
	session_start();
	include_once('conexao.php');
	$compromisso = $_POST['compromisso'];
	$local = $_POST['local'];
	$data = $_POST['data'];
	$hora = $_POST['hora'];
	$lembrete = $_POST['lembrete'];
	$id_usuario = $_SESSION['id'];
	$pdo->query("INSERT INTO compromissos(compromisso,local,data,hora,lembrete,id_usuario) VALUES ('$compromisso','$local','$data','$hora','$lembrete','$id_usuario')");
	header('Location: pagina1.php');

	





?>	