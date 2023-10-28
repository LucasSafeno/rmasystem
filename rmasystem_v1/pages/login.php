<main>
        <div class="container">
            <div id="main-top">
                <h2 class="main-title">Faça seu Login</h2>
            </div>

            <div id="login-area">
                <form action="valida_login.php" method="POST" id="formulario-area">

                   
                        <label for="usuario">Usuário : </label>
                        <input type="text" name="usuario" id="usuario" placeholder="Sua matricula" >
                        <i class="fa-solid fa-user"></i>
                   

                  
                        <label for="senha">Senha : </label>
                        <input type="password" name="senha" id="senha" placeholder="Password">
                        <i class="fa-solid fa-lock"></i>

                   
                        <input type="submit" value="LOGIN" class="main-btn" >
                        <a href="#">Esqueceu a senha ?</a>    
                        <?php 
                    if(isset($_GET['er'])){
                        
                        $erro = $_GET['er'];

                        if($erro = 'usuarioErr1'){ ?>
                                <div class="notificaoErr1">
                                    <p>Usuário/senha incorreto</p>
                                </div>
                        <?php }
                    }
                
                ?>               
                </form>
             
            </div>

        </div>
    </main>