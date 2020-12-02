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
  <?php 
  //Fazendo a conexao com o banco de dados
  include_once('conexao.php');
  //Pegando os dados para preencher os campos automaticamente
    if(isset($_GET['id_compromisso'])){
    $id = $_GET['id_compromisso'];
    $sql = "SELECT * FROM compromissos WHERE id_compromisso = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id',$id);
    $result = $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
  }
  
  //se o botao atualizacao for setado roda o script abaixo
  if(isset($_POST['atualizar'])){
    //Se nenhum campo estiver vazio entra na condicional
    if(!empty($_POST['compromisso']) && !empty($_POST['local']) && !empty($_POST['data']) && !empty($_POST['hora']) && !empty($_POST['lembrete'])){

        $id = $_GET['id_compromisso'];
        $compromisso = $_POST['compromisso'];
        $local = $_POST['local'];
        $data = $_POST['data'];
        $hora = $_POST['hora'];
        $lembrete = $_POST['lembrete'];
        $id = $_GET['id_compromisso'];
        //prepara a query que substuira os respectivos campos informados
        $stmt = $pdo->prepare("UPDATE compromissos SET compromisso = :compromisso, local = :local, data = :data, hora = :hora, lembrete = :lembrete WHERE id_compromisso = :id");
        $stmt -> bindParam(':compromisso',$compromisso);
        $stmt -> bindParam(':local',$local);
        $stmt -> bindParam(':data',$data);
        $stmt -> bindParam(':hora',$hora);
        $stmt -> bindParam(':lembrete',$lembrete);
        $stmt -> bindParam(':id',$id);
        $stmt -> execute();
        header('Location: pagina1.php');

      }
  }

  ?>
  <form method="post">

	    <div class="container">    
      <div class="row">

        <div class="card-abrir-chamado">
          <div class="card">
            <div class="card-header" style="text-align: center;font-size: 20px;">
              Alterar compromisso
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  
                    <div class="form-group">
                      <label>Compromisso</label>
                      <input name="compromisso" type="text" class="form-control" placeholder="compromisso" value="<?php echo ($rows[0] ["compromisso"]) ?>">
                    </div>
                    
                    <div class="form-group">
                      <label>Local</label>
                      <input type="text" name="local" class="form-control" placeholder="local"value="<?php echo ($rows[0] ["local"]) ?>">
                    </div>

                    <div class="form-group">
                      <label>Data</label>
                      <input type="date" name="data" class="form-control"value="<?php echo ($rows[0] ["data"]) ?>">
                    </div>

                    <div class="form-group">
                      <label>Hora</label>
                      <input type="time" name="hora" class="form-control"value="<?php echo ($rows[0] ["hora"]) ?>">
                    </div>
                    
                    <div class="form-group" class="form-control">
                      <label>Lembrete</label>
                      <textarea name="lembrete" class="form-control" rows="3"><?php echo ($rows[0] ["lembrete"]) ?></textarea>
                    </div>

                    <div class="row mt-5">
                      <div class="col-6">
                        <a class="btn btn-lg btn-warning btn-block" href="pagina1.php" >Voltar</a>
                      </div>

                      <div class="col-6">
                        <button class="btn btn-lg btn-info btn-block" type="submit" name="atualizar">Salvar</button>
                      </div>
                    </div>
                  </form>

</body>
</html>