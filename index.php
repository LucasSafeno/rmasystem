<?php 
session_start();
if(file_exists("vendor/autoload.php")){
  require "vendor/autoload.php";
}else{
  echo "ARQUIVO NAO INSERIDO";
}

use RMA\Database;
use RMA\User;

$db = new Database("rmasystem","localhost","root", "");
$db->connect();
$db->getConnection();

$u = new User($db);

if(isset($_SESSION['id']) && !empty($_SESSION['id'])){
    header("Location: home.php");
 }

?>

<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RMA_System / By LucasSafeno - Lucas Tenório</title>
    <!-- Normalize !-->
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <!-- Google fonts !-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- CSS !--> 
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    
    <div class="container">
      
         <div class="side-left">

            <div class="login">
                <h1>LOGIN</h1>

                <form method="POST">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="email@email.com">

                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" placeholder="*********">

                    <input type="submit" value="Login" class="btn">

                    <?php 
                      if(isset($_POST['email']) && !empty($_POST['email'])){
                        $email = addslashes($_POST['email']);
                        $senha = md5($_POST['senha']);
                        $dados = array();

                        if($u->verificaLogin($email, $senha)){

                          $dados = $u->getUser($_SESSION['id']);

                          $id = $dados['id'];
                          header("Location: home.php?id=".$id);

                         

                        }else{ ?>

                            <div class="warning">Usuário/Senha incorretos!</div>

                        <?php
                        }
                      }
                    
                    ?>
                </form>


            </div>
        
        </div><!-- side-left !--> 

        <div class="horizontal"></div>
        
        <div class="side-right">
            <div class="logo">
                <img src="assets/images/logo.png" alt="RMA System Logo">
            </div>
        </div><!-- side-right !--> 
    </div><!-- Container !-->
    

  </body>
</html>