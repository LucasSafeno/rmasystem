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

           

        </div>
    </main>