<?php
include "funcionais/header_ref.php";
?>
<!doctype html>
<html class="no-js" lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>TournaTec - Cria&ccedil;&atilde;o de Torneios pr&aacute;ticos</title>
    <meta name="description" content="">
    <link rel="stylesheet" href="css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <div class="back-index">
        <div class="container">
        <bgcolor=”#800000">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="hero-content text-center tela_login" id="dados_usuario">

                        <div class="imagens">
                            <img src="img/icone_usuario.jpg" alt="" id="foto_perfil" class="text-left">
                        </div>
                        <p class="intro">
                            <!-- Foto -->
                        </p>
                        <div id="input" class="">
                        <form action="funcionais/altera_dados.php" method="post" id="dados">
                        <?php 
                            include "funcionais/consulta_usuario.php";

                            echo "<label for='nome_usuario' class='text-left' >Nome</label><br>
                            <input type='text' class = 'todos_dados' id='nome_usuario' name='nome_usuario' value='$res1'><br><br>";
                            
                            echo "<label for='email_usuario' class='text-left' >Email</label><br>
                            <input type='mail' class = 'todos_dados' id='email_usuario' name='email_usuario' value='$res2'><br><br>";

                            echo "<label for='senha_usuario' class='text-left' >Senha</label><br> 
                                <input type='password' class = 'todos_dados' id='senha_usuario' name='senha_usuario' value='$res3'>
                                <button class='botao-ver-senha' type='button' id='verSenha'><span class='material-symbols-outlined'>visibility</span></button><br><br>";
                        ?>
                        
                        </form>
                        
                        <br> <button id='btn_alterar' class= "text-center btn_alterar_dados" form="dados" value="Submit" hidden>Alterar
                        <button id='btn_cancela_alterar' class= "text-center btn_alterar_dados" hidden>Cancelar
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>

        </section>
    </footer>
</body>
<script src="js/header/scripts.js"></script>

</html>