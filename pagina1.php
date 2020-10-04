<!DOCTYPE html>
<html>
<head>
	<title>index</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<style type="text/css">
		.navbar{
			height: 70px;
  			position: fixed;
  			top: 0;
  			right: 0;
  			left: 0;
  			border-bottom: 1px solid #ccc;
  			background-color: grey;

		}
		.imagem-perfil{
			height: 100px;
			width: auto;
			border-radius: 50%;

		}
		.formatacao-conteudo{
			width: 100%;
  			table-layout: fixed;
  			text-align: center;"
		}
		.icons{
			margin: 0px 20px 90px 0px;
		}
		.fa-calendar-plus {
			color: white;
		}
		.fa-trash-alt{
			color: black;
		}
		.imagem-de-fundo{
			background-image: url("imagens/agenda-clara.jpg");
			background-size: 1400px auto;
			background-repeat: no-repeat;
			
		}

	</style>

</head>
<body style="margin-top: 180px;">

	<div class="navbar" style="font-size: 35px;">
		<img src="imagens/goku.jpg" class="imagem-perfil" style="margin: 10px 50px;">
		<div class="icons" style="margin-left: 950px;">
			<a href="compromisso.php" ><i class="far fa-calendar-plus" ></i></a>
		</div>
		<div style="margin-bottom: 90px;">
			
		</div>
	</div>
		
		<form method="POST" action="pesquisa_compromisso.php" enctype="multipart/form-data">
			<input type="search" name="pesquisar" placeholder="Pesquisar" class="form-control" style="width: 400px; height: 30px;font-size: 20px;margin: 0% 0% 5% 63%;">
			<?php 
			include_once('conexao.php');
			
			
		$dados = $pdo->query("SELECT * FROM compromissos");

		foreach ($dados as $all_dados) {
			
			

?>
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
			<?= $all_dados['compromisso'] ?>
		</td>
		<td>
			<?= $all_dados['local'] ?>
		</td>
		<td>
			<?= $all_dados['data'] ?>
		</td>
		<td>
			<?= $all_dados['hora'] ?>
		</td>
		<td>
			<?= $all_dados['lembrete'] ?>
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