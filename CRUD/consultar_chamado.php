<?php
  require_once('valida_sessao.php');

  $abrir = fopen('clientes.txt', 'r');
  $resultado = [];
  
  while(!feof($abrir)){
    $chamado = fgets($abrir);
    $resultado[] = $chamado;
  }

  fclose($abrir);
?>
<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <?php require_once('menu.php');?>

    <div class="container">    
      <div class="row">
      <!-- Título de -->
      <?php include_once('titulo_perfil.php');?>

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            
            <div class="card-body">
              
            <?php foreach($resultado as $chamados){
              $unico = explode('#', $chamados);
              
              if($_SESSION['tipo_perfil'] == 2){
                if($_SESSION['id'] != $unico[0]){
                  continue;
                }
              }
              if(count($unico) <= 1){
                continue;
              }
            ?>
                
                <div class="card mb-3 bg-light">
                  <div class="card-body">
                    <h5 class="card-title">Serviço: <?= $unico[1]?></h5>
                    <h6 class="card-subtitle mb-2 text-muted">Categoria: <?= $unico[2]?></h6>
                    <p class="card-text">Descrição: <?= $unico[3]?></p>

                  </div>
                </div>
            <?php }; ?>

              <div class="row mt-5">
                <div class="col-6">
                  <button class="btn btn-lg btn-warning btn-block" type="button" onclick="history.back();">Voltar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>