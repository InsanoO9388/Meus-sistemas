<?php
	include_once('conexao.php');
	$compromisso = $_POST['compromisso'];
	$local = $_POST['local'];
	$data = $_POST['data'];
	$hora = $_POST['hora'];
	$lembrete = $_POST['lembrete'];
	$pdo->query("INSERT INTO compromissos(compromisso,local,data,hora,lembrete) VALUES ('$compromisso','$local','$data','$hora','$lembrete')");
	header('Location: pagina1.php');

	





?>	