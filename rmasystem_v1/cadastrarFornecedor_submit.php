<?php 
include_once "includes/header.php";

use RMA\Fornecedor;
use RMA\Usuario;

$u = new Usuario();


if(isset($_POST['cnpj']) && !empty($_POST['cnpj'])){
    $cnpj =  addslashes($_POST['cnpj']);


    $f = new Fornecedor();
    $f->__set('cnpj', $cnpj);

    if($f->getCnpj()){
    
        $dados = $f->getCnpj();

        if(!is_numeric(($cnpj))){
            header("Location: cadastrar_fornecedor.php?er=usuarioErr1");
        }
        if(mb_strlen($cnpj) < 14){
            header("Location: cadastrar_fornecedor.php?er=usuarioErr2"); 
        }

        if(empty($dados)) {
            header("Location: cadastrar_fornecedor.php?er=usuarioErr1");
        }
        if(empty($dados)){
            header("Location: cadastrar_fornecedor.php?er=usuarioErr1");
        }
       
      
        $cnpj = $dados['cnpj'];
        $nome_fantasia = $dados['fantasia'];
        //$ddd = $dados['ddd'];
        $telefone = $dados['telefone'];
        $email = $dados['email'];
        $rua = $dados['logradouro'];
        $numero = $dados['numero'];
        $complemento = $dados['complemento'];
        $bairro = $dados['bairro'];
        $cidade = $dados['municipio'];
        $estado = $dados['uf'];

        if(!isset($nome_fantasia)){
            header("Location: cadastrar_fornecedor.php?er=cadastroErr1");
        }
    }// getCnpj()
}else{
    header("Location: cadastrar_fornecedor.php?er=cadastroErr1");
}

?>

<main>
        <div class="container">
            <div id="main-top">
                <h2 class="main-title">Cadastro Fornecedor</h2>
            </div>

            <div id="fornecedor-area">
                <form action="valida_login.php" method="POST" id="fornecedor-form">

                   <label for="cnpj">CNPJ</label>
                   <input type="text" name="cnpj" id="cnpj" disabled value="<?=$cnpj; ?>">
                    
                    <label for="nome_fantasia">Nome Fantasia</label>
                    <input type="text" name="nome_fantasia" id="nome_fantasia" value="<?=$nome_fantasia; ?>">
                   
                    <label for="telefone">Telefone</label>
                    <input type="text" name="telefone" id="telefone" value="<?=$telefone;?>">

                    <label for="email">Email</label>
                    <input type="email" name="emaill" id="email" value="<?=$email;?>" >

                    <label for="rua">Rua </label>
                    <input type="text" name="rua" id="rua" value="<?=$rua;?>" >

                    <label for="numero">Numero</label>
                    <input type="text" name="numero" id="numero" value="<?=$numero;?>" >

                    <label for="numero">Complemento</label>
                    <input type="text" name="complemento" id="complemento" value="<?=$complemento;?>" >

                    <label for="numero">Bairro</label>
                    <input type="text" name="bairro" id="bairro" value="<?=$bairro;?>" >

                    <label for="numero">Cidade</label>
                    <input type="text" name="cidade" id="cidade" value="<?=$cidade;?>" >

                    <label for="uf">Estado:</label>
                    <input type="text" name="estado" id="estado" value="<?=$estado;?>" >

                    <input type="submit" value="Cadastrar" class="main-btn">

                </form>
            </div>

        </div>
    </main>

    <?php include_once "includes/footer.php"; ?>