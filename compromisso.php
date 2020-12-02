<?php
include_once('valida_login.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>teste</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style type="text/css">
    .card-abrir-chamado {
        padding: 30px 0 0 0;
        width: 70%;
        margin: 0 auto;
      }
  </style>
</head>
<body style="margin-top: 60px";>
  <?php include("navbar.php"); ?>
  <form method="post" action="cad_compromisso.php">
	    <div class="container">    
      <div class="row">

        <div class="card-abrir-chamado">
          <div class="card">
            <div class="card-header" style="text-align: center;font-size: 20px;">
              Cadastrar compromisso
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  
                    <div class="form-group">
                      <label>Compromisso</label>
                      <input name="compromisso" type="text" class="form-control" placeholder="compromisso">
                    </div>
                    
                    <div class="form-group">
                      <label>Local</label>
                      <input type="text" name="local" class="form-control" placeholder="local">
                    </div>

                    <div class="form-group">
                      <label>Data</label>
                      <input type="date" name="data" class="form-control">
                    </div>

                    <div class="form-group">
                      <label>Hora</label>
                      <input type="time" name="hora" class="form-control">
                    </div>
                    
                    <div class="form-group" class="form-control">
                      <label>Lembrete</label>
                      <textarea name="lembrete" class="form-control" rows="3"></textarea>
                    </div>

                    <div class="row mt-5">
                      <div class="col-6">
                        <a class="btn btn-lg btn-warning btn-block" href="pagina1.php" >Voltar</a>
                      </div>

                      <div class="col-6">
                        <button class="btn btn-lg btn-info btn-block" type="submit">Cadastrar</button>
                      </div>
                    </div>
                  </form>

</body>
</html>