<?php
 require_once 'pages/header.php';
?>


<div class="produtos-container">
    
    <div class="produtos-titulo">
        <h1>Produtos</h1>
    </div> <!-- produtos-titulo !--> 

    <div class="produtos-opcoes">

        <div class="produtos-adicionar">
            <div class="icon">
                <img src="assets/images/adicionar.png">
                <a href="adicionar.php">Adicionar</a>
            </div>
        </div>

        <div class="produtos-consultar">
            <div class="icon">
                <img src="assets/images/consultar.png">
                <a href="consultar.php">Consultar</a>
            </div>
        </div>

        <div class="produtos-importar">
            <div class="icon">
                <img src="assets/images/excel.png">
                <a href="consultar.php">Importar Planilha</a>
                <input type="text" placeholder="CUIDADO AO UTILIZAR, IRÁ SOBREPOR BANCO DE DADOS ANTERIOR" disabled>
            </div>
        </div>

    </div><!-- produtos-opcoes !--> 

</div> <!-- produtos-container !-->


<?php  require_once 'pages/footer.php'; ?>
