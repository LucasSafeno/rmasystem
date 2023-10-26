<?php 
session_start();
include_once "vendor/autoload.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechnoSpace - RMA_SYSTEM - Atual.Tech</title>
    <!-- Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700;1,900&family=Titillium+Web:wght@400;600&display=swap" rel="stylesheet">
    <!-- Normalize CSS-->
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
  
</head>
<body>

    <header>

        <div class="logo">
            <a href="https://www.technospace.com.br/" target="_blank">technospace<span class="underRed">_</span></a>
        </div>


        <nav>
            <div class="container">
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>

                    <li>
                        <a href="mailto:suporte@atual.tech">Support</a>
                    </li>

                    <li>
                        <?php if(isset($_SESSION['id'])) {?>
                            <a href="sair.php" class="login-btn">SAIR</a>    
                        <?php }else{?>
                            <a href="login.php" class="login-btn">LOGIN</a>
                        <?php }?>
                    </li>
                </ul>
            </div>
        </nav>
    </header>