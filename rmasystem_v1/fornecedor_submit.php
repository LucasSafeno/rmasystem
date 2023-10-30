<?php 
session_start();
include_once "vendor/autoload.php";


use RMA\Usuario;
use RMA\Fornecedor;
$u = new Usuario();
$u->verificaSessao();

$f = new Fornecedor();

    if(isset($_POST['cnpj'])){

        $cnpj = addslashes($_POST['cnpj']);
        $nome_fantasia = addslashes($_POST['nome_fantasia']);
        $telefone = addslashes($_POST['telefone']);
        $email = addslashes($_POST['email']);
        $rua = addslashes($_POST['rua']);
        $numero = addslashes($_POST['numero']);
        $complemento = addslashes($_POST['complemento']);
        $bairro = addslashes($_POST['bairro']);
        $cidade = addslashes($_POST['cidade']);
        $estado = addslashes($_POST['estado']);

        $f->__set('cnpj', $cnpj);
        $f->__set('nome_fantasia', $nome_fantasia);
        $f->__set('telefone', $telefone);
        $f->__set('email', $email);
        $f->__set('rua', $rua);
        $f->__set('numero', $numero);
        $f->__set('complemento', $complemento);
        $f->__set('bairro', $bairro);
        $f->__set('cidade', $cidade);
        $f->__set('estado', $estado);


        if($f->cadastrarFornecedor()){ 
            header("Location: home.php?cadastro=cadastrook");
        }
    }else{
        header("Location: cadastrar_fornecedor.php?er=errocadastro");
    }
 ?>