<!DOCTYPE html>
<html>
<head>
	<title>Pesquisa registro</title>
	<style type="text/css">
			.formatacao-conteudo{
			width: 100%;
  			table-layout: fixed;
  			text-align: center;"
		}

	</style>
</head>
<body>

	<?php
	include('navbar.php');
	include_once('conexao.php');
		//echo $rows_pesquisa[$i] ['compromisso'];
				
		$result_pesquisa = $_POST['pesquisar'];
		$dados = $pdo->query("SELECT * FROM compromissos WHERE compromisso LIKE '%$result_pesquisa%'");

		foreach ($dados as $all_dados) {
			
			//echo $rows_pesquisa[0] ['compromisso'];
			//echo $rows_pesquisa[1] ['compromisso'];
			

?>
	<form>
	<table class="formatacao-conteudo">
	<tr>
		<th> 
			Compromisso
		</th>
		<th> 
			Local
		</th>
		<th> 
			Data
		</th>
		<th> 
			Hora
		</th>
		<th> 
			Lembrete
		</th>
	</tr>
	<tr>
		<td>
			<?php echo $all_dados ['compromisso'] ?>
		</td>
		<td>
			<?php echo $all_dados ['local'] ?>
		</td>
		<td>
			<?php echo $all_dados ['data'] ?>
		</td>
		<td>
			<?php echo $all_dados ['hora'] ?>
		</td>
		<td>
			<?php echo $all_dados ['lembrete'] ?>
		</td>
		<td>
			
			<a href="remove.php?id_compromisso=<?php echo $all_dados['id_compromisso']?>" class=""><i class="fas fa-trash-alt fa-1x"></i></a>
			<a href="alterar.php?id_compromisso=<?php echo $all_dados['id_compromisso']?>"><i class="fas fa-address-card"></i></a>
		</td>

	</tr>
	</table>

	<hr>
<?php } ?>
</form>
</body>
</html>