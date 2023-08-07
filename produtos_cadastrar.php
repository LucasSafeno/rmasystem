<?php 
session_start();
require 'vendor/autoload.php';

if(!isset($_SESSION['id']) && empty($_SESSION['id'])){
    header("Location: index.php");
}

use RMA\Database;
use RMA\Produtos;
use RMA\User;

$db = new Database("rmasystem","localhost","root", "");
$db->connect();
$db->getConnection();

$u = new User($db);
$p = new Produtos($db);
//$id = $_POST['id'];

//$dados = $u->getUser($id);


if(isset($_POST['codigo'])){
    $codigo = addslashes($_POST['codigo']);
    $descricao = addslashes($_POST['descricao']);
    $valor = addslashes($_POST['valor']);
    $quantidade = addslashes($_POST['quantidade']);
    $fornecedor = addslashes($_POST['fornecedor']);
    $cnpj = addslashes($_POST['cnpj']);
    $data_compra = addslashes($_POST['data_compra']);
    $nf_compra = addslashes($_POST['nf_compra']);

    $p->cadastrarProduto($codigo, $descricao, $valor, $quantidade, $fornecedor, $cnpj, $data_compra, $nf_compra);
    ?>
    <script>alert('Produto Cadastrado')</script>
    <script>window.location.href="home.php?id=<?php echo $_SESSION['id']; ?>"</script>
    <?php
 }


?>