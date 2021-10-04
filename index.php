<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>

<body>
  <?php
    if(!isset($_SESSION['login'])){

      if(isset($_POST['submit'])){
        $login = 'avoguga@gmail.com';
        $senha = '123456';
        
        $loginForm = $_POST['login'];
        $senhaForm = $_POST['senha'];
        
        if($login == $loginForm && $senha == $senhaForm){
           $_SESSION['login'] = true;
           header('Location: login.php?erro=1');
        } else{
          $_SESSION['error_login'] = true;
          header('Location: login.php');
          echo 'Dados inválidos';
        }
      }
      
      include('login.php');
    }else{
      if(isset($_GET['logout'])){
        unset($_SESSION['login']);
        session_destroy();
        header('Location: index.php');
      }
      include('home.php');
    }
  ?>
</body>

</html>