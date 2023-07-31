<?php
 require_once 'pages/header.php';

 $id = $_GET['id'];
?>

<main>
    <div class="produtos">
        <div class="icon">
           
                <img src="assets/images/produtos.png">
                <a href="produto.php?id=<?php echo $id;?>"> Produtos</a>
        </div>
        
    </div>

    <div class="processos">
        <div class="icon">
            <img src="assets/images/processo.png">
            <a href="index.php"> Processos</a>
        </div>
    </div>

    <div class="gestao">
        <div class="icon">
            <img src="assets/images/gestao.png">
            <a href="index.php"> Gestão</a>
        </div>
    </div>


    </main>

<?php  require_once 'pages/footer.php'; ?>
