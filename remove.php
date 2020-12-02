<?php
include_once('conexao.php');
$id = $_GET['id_compromisso'];
$stmt = $pdo->prepare('DELETE FROM compromissos WHERE id_compromisso= :id');
$stmt->bindParam(':id', $id);
$stmt->execute();
header('Location: pagina1.php');




?>
