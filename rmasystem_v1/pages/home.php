<main>
    <?php 
    use RMA\Usuario;
        $u = new Usuario();
        $u->__set('id', $_SESSION['id']);

        if($u->getInfoUser()){
            $dados = $u->getInfoUser();
        }else{
            echo "ERROR";
        }
    ?>
        <div class="container">
            <div id="main-top">
                <h2 class="main-title">Bem-Vindo, <?php echo $dados['nome']; ?></h2>
            </div>

            <div class="box-links">

                <div class="box-link">
                   
                    <a href="cadastrar_fornecedor.php"> <i class="fa-solid fa-plus"></i>Cadastrar Fornecedor</a>
                </div>

                <div class="box-link">
                    <a href="#"><i class="fa-solid fa-bug"></i>Cadastrar Produto</a>
                </div>

                <div class="box-link">
                    <a href="#"><i class="fa-solid fa-magnifying-glass"></i></i>Consultar RMA</a>
                </div>

            </div>


        </div>
    </main>