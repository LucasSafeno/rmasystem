<main>
        <div class="container">
            <div id="main-top">
                <h2 class="main-title">Cadastrar Fornecedor</h2>
            </div>

            <div id="buscar-area">
                <form action="cadastrarFornecedor_submit.php" id="buscar-form" method="POST">
                    <label for="cnpj">CNPJ :</label>
                    <input type="text" name="cnpj" id="cnpj">
                    <input type="submit" value="Buscar" class="main-btn">

                    <?php 
                    
                    if(isset($_GET['er'])){
                        $erro = $_GET['er'];

                        if($erro = 'cadastroErr1'){ ?>

                                <div class="notificaoErr1">
                                    <p>CNPJ Inválido!</p>
                                </div>


                        <?php }
                    }
                    ?>

                </form>

                


        </div>
    </main>