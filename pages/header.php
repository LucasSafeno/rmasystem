<?php 
session_start();
require 'vendor/autoload.php';

if(!isset($_SESSION['id']) && empty($_SESSION['id'])){
    header("Location: index.php");
}

use RMA\Database;
use RMA\User;

$db = new Database("rmasystem","localhost","root", "");
$db->connect();
$db->getConnection();

$u = new User($db);

$id = $_GET['id'];

$dados = $u->getUser($id);
$nome = $dados['nome'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - RMA_System</title>
     <!-- Normalize !-->
     <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <!-- Google fonts !-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- CSS !--> 
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <header>
        <div class="info-user">
           <p>Olá, <?php echo $nome;?>!</p> 
        </div>
        <nav>
            <ul>

                <li>
                     <a href="sair.php">Sair</a>
                </li>
                <li>
                     <a href="sair.php">Suporte</a>
                </li>
                <li>
                     <a href="sair.php">E-Mail</a>
                </li>
            
            </ul>
        </nav> <!-- nav !--> 
    </header> <!-- Header !--> 
