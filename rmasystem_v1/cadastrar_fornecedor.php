<?php 
require_once "includes/header.php"; 

use RMA\Usuario;

$u = new Usuario();
$u->verificaSessao();

require_once "pages/cadastrar_fornecedor.php";
require_once "includes/footer.php";

?>