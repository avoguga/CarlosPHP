<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Atividade PHP</title>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->
  <style>
  body {
    margin: 0;
    padding: 0;
    background-color: #2E2532;
    height: 100vh;
  }

  #login .container #login-row #login-column #login-box {
    margin-top: 50px;
    max-width: 600px;
    border: 1px solid #9C9C9C;
    background-color: #EAEAEA;
  }

  #login .container #login-row #login-column #login-box #login-form {
    padding: 20px;
  }
  </style>
</head>

<body>
  <div id="login">
    <h3 class="text-center text-white pt-5">Atividade PHP</h3>
    <div class="container">
      <div id="login-row" class="row justify-content-center align-items-center">
        <div id="login-column" class="col-md-6">
          <div id="login-box" class="col-md-12">
            <!-- FORMULARIO -->
            <form id="login-form" class="form" method="post">
              <h3 class="text-center">Login</h3>

              <?php
                if(isset($_SESSION['error_login'])):
              ?>
              <!-- MENSAGEM DE ERRO [INICIO] * Só exibir se tiver falhado no login -->
              <p class="alert alert-danger" name="error">Login ou senha inválidos</p>
              <!-- MENSAGEM DE ERRO [FIM] -->

              <?php
                endif;
                unset($_SESSION['error_login']);
              ?>

              <!-- EMAIL -->
              <div class="form-group">
                <label>Email:</label><br>
                <input name="login" type="text" class="form-control">
              </div>

              <!-- SENHA -->
              <div class="form-group">
                <label>Senha:</label><br>
                <input name="senha" type="password" class="form-control">
              </div>

              <!-- SUBMIT -->
              <div class="form-group">
                <input type="submit" name="submit" class="btn btn-danger btn-md" value="Enviar">
              </div>
            </form>
            <!-- FORMULÁRIO[FIM] -->
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>