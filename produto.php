<?php
 require_once 'pages/header.php';
 use RMA\Produtos;


 $p = new Produtos($db);
?>

<div class="produtos-container">
    
    <div class="produtos-titulo">
        <h1>Produtos</h1>
    </div> <!-- produtos-titulo !--> 

    <div class="produtos-opcoes">

        <div class="produtos-adicionar">
            <div class="icon">
                <img src="assets/images/adicionar.png"  >
                <a href="adicionar.php" id="modal">Adicionar</a>
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
                <a href="consultar.php" id="importarModal">Importar Planilha</a>
                <input type="text" placeholder="CUIDADO AO UTILIZAR, IRÁ SOBREPOR BANCO DE DADOS ANTERIOR" disabled>
            </div>
        </div>

    </div><!-- produtos-opcoes !--> 

</div> <!-- produtos-container !-->


<div class="modal">
    <div class="modal-titulo">
        <h3>Adicionar Produto</h3>
    </div>

    <div class="formulario_cadastrar">
        <form method="POST" action="produtos_cadastrar.php">
            <label for="codigo">Código</label>
            <input type="text" name="codigo" id="codigo">

            <label for="descricao">Descrição</label>
            <input type="text" name="descricao" id="descricao">

            <label for="valor">Valor</label>
            <input type="text" name="valor" id="valor">

            <label for="quantidade">Quantidade</label>
            <input type="number" name="quantidade" id="quantidade" maxlength="2">

            <label for="fornecedor">Fornecedor</label>
            <input type="text" name="fornecedor" id="fornecedor">

            <label for="cnpj">Fornecedor CNPJ</label>
            <input type="text" name="cnpj" id="cnpj">

            <label for="data_compra">Data compra</label>
            <input type="date" name="data_compra" id="data_compra">

            <label for="nf_compra">NF Compra</label>
            <input type="text" name="nf_compra" id="nf_compra">
            <?php 
                $id = $_GET['id'];
            ?>

            <input type="submit" class="btn-cadastrar" value="Cadastrar">

        </form>
    </div>      
    <button class="fecharModal btn">Fechar</button>
</div>
 <!-- produtos-importar-modal !-->

 <div class="produtos-importar-modal">
    <div class="produtos-importar-modal-titulo">
         <h3>Importar Banco dos Excel</h3>
    </div> 
    <div class="produtos-importar-modal-body">
        <form action="import_submit.php" enctype="multipart/form-data" method="post">
            <label for="csv">Nome:</label>
            <input type="file" name="csv" id="csv">
            <br>
            <input type="submit" class="btn-importar" value="Importar">
        </form>
    </div>
  

    <button class="fecharModal btn">Fechar</button>
 </div>

<?php  require_once 'pages/footer.php'; ?>
