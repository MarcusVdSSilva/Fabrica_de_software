<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>Login</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    
        <header>

        </header>

        <main>
            
                
                <div class="telaLogin">

                    <div class="cabecario">

                    <?php
                        if(isset($_GET['msg'])){
                            echo "<div id= 'msg'>" . $_GET['msg'] . "</div>";
                        }

                    ?>

                        <h1>Conecte-se</h1>

                        <h4>Não é registrado? <a href="html/telaRegistro.html"> <strong>Cadastre-se</strong> </a></h4>
                        <hr>

                    </div>
                    <form class="areaDeLogin" action="php/processaLogin.php" method="post" autocomplete="on">

                        <label for="user" class="label">Por favor, insira seu nome:</label><br>
                        <input type="text" name="user" id="user" required autocomplete="username"><br><br>
                        
                        <label for="password" class="label">Por favor, insira sua senha:</label><br>
                        <input type="password" name="password" id="password" required autocomplete="current-password"><br>

                        <a href="html/esqueciSenha.html">Esqueci minha senha?</a><br>
                        
                        <button type="submit">Logar</button>
                    
                    </form>
                </div>
                
        </main>

        <footer>

        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
$('#msg').css('display', 'none');
$('#msg').fadeIn(1000);
$('#msg').fadeOut(2000);

});
</script>

</body>
</html>