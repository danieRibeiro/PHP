
<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <?php require_once('menu-home.php');?>

    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">
              <form action="valida_login.php" method="post">
                <div class="form-group">
                  <input name="email" type="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="form-group">
                  <input name="senha" type="password" class="form-control" placeholder="Senha">
                </div>
                <?php
                  if(isset($_GET["login"]) && $_GET["login"] == 'erro'){
                ?>
                <div>
                  <p class="text-danger ml-1">Usuário ou senha inválida</p>
                </div>
                <?php
                  };
                  ?>
                <?php
                  if(isset($_GET["login"]) && $_GET['login'] == "private"){
                ?>
                <div>
                  <p class="text-danger ml-1">Você precisa estar logado para acessar as páginas</p>
                </div>
                <?php
                  };
                ?>
                <?php
                  if(isset($_GET["login"]) && $_GET["login"] == 'logoff'){
                ?>
                <div>
                  <p class="text-success">Deslogado com sucesso</p>
                </div>
                <?php }; ?>
                <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
              </form>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>