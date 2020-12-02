<!DOCTYPE html>
<html>
<head>
	<title>teste</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<style type="text/css">
		.imagem-de-fundo{
			background-image: url("imagens/agenda.jpg");
			background-size: 1400px auto;
			background-repeat: no-repeat;

		}
		.maior-div{
			height: 500px;
			width: 600px;
			margin: auto;
			margin-top: 60px;
		}


	</style>
</head>
<body class="imagem-de-fundo">
	
	<div class="container">
		<div class="row">
			<div class="p-3 mb-2 bg-dark text-white maior-div" style="border-radius: 2%;">
				<form method="post" action="confirma_dados.php">
					<input type="email" name="email" placeholder="Email" size="50px;" class="form-group form-control" style="margin-top: 50px;">
					<input type="password" name="senha" style="margin-top: 10px;" placeholder="Senha" size="50px;" class="form-group form-control">

			<?php if (isset($_GET['login']) && $_GET['login'] = 'erro') { ?>
				<span style="color:red;"> Usuario ou senha invalida </span>
			<?php } ?>

		<button type="submit" class="espacamento form-control btn btn-success" style="">
			
		Entrar
		</button>
		<a href="https://www.facebook.com/guilerme.correia.7" target="_blank"><i class="fab fa-facebook-square" style="font-size: 60px;margin-left: 30%;margin:auto; margin-top: 38%;" class="p-3 mb-2 bg-primary text-white"></i></a>

				</form>

			</div>
		</div>
	</div>
	


</body>
</html>