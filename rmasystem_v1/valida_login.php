<?php 
include_once "vendor/autoload.php";


use RMA\Usuario;
$u = new Usuario();

if(isset($_POST['usuario']) && !empty($_POST['usuario'])){
    $usuario    =   $_POST['usuario'];
    $senha      =   $_POST['senha'];


    $u->__set('email', $usuario);
    $u->__set('senha', md5($senha));

    
    if($u->login()){
        $dados = $u->login();
        $_SESSION['id'] = $dados['id'];

        echo $dados['email'];
    }else{
        echo "<b>Usuário não encontrado</b>";
    }

}else{
    header("Location: login.php?er=er01");
}
 ?>