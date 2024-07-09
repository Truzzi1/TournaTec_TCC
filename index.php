<?php
include "funcionais/header_ref.php";

?>
<!doctype html>

<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>TournaTec - Criação de Torneios</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body id="top">
    <div class="back-index">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="hero-content text-center">
                        <h1>Participe, jogue e vença</h1>
                        <p class="intro">
                            Crie seu próprio torneio e faça competições com seus adversários! Com o TournaTec o seu torneio fica mais emocionante, administre suas competições e viva o esporte!
                        </p>
                        <?php 

                        if (isset($_SESSION['id'])) {
                            echo "<a href='tela_torneio.php' class='btn btn-fill btn-large btn-margin-right'> Torneios </a>";
                            echo "<a href='criar_torneios.php' class='btn btn-accent btn-large'> Criar Torneios </a>"; 

                        }else{
                            echo "<a href='frm_login.php' class='btn btn-fill btn-large btn-margin-right'> Torneios </a>";
                            echo "<a href='frm_login.php' class='btn btn-accent btn-large'> Criar Torneios </a>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

        </section>
        <section class="intro section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 intro-feature">
                        <div class="intro-icon">
                            <span class="material-symbols-rounded">design_services</span>
                        </div>
                        <div class="intro-content">
                            <h5>Criação Otimizada</h5>
                            <p>Com a criação otimizada do TournaTec, os torneios passam a ser criados com mais velocidade e facilidade.</p>
                        </div>
                    </div>
                    <div class="col-md-4 intro-feature">
                        <div class="intro-icon">
                            <span class="material-symbols-rounded">
                                workspace_premium
                            </span>
                        </div>
                        <div class="intro-content">
                            <h5>Realize Competições</h5>
                            <p>Com uma variedade de esportes presentes no nosso site, você consegue abrangir uma ampla carga de participantes.</p>
                        </div>
                    </div>
                    <div class="col-md-4 intro-feature">
                        <div class="intro-icon">
                            <span class="material-symbols-rounded">
                                devices
                            </span>
                        </div>
                        <div class="intro-content last">
                            <h5>Acompanhe</h5>
                            <p>Acompanhe torneios em andamento já criados por outros usuarios de forma intuitiva.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    </footer>
</body>

</html>