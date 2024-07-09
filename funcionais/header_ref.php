    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/queries.css">
    <link rel="stylesheet" href="css/etline-font.css">
    <link rel="stylesheet" href="bower_components/animate.css/animate.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
   <!-- <link rel="stylesheet" href="css/main.css"> -->
    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <?php
  // include_once 'login.php';
   include_once 'conexao.php';   
     ?>
    <section class="hero">
        <section class="navigation">
            <header>
                <div class="header-content">
                    <div class="logo"><a href="index.php"><img src="img/tournatec_logo.png"></a></div>
                    <div class="header-nav">
                        <nav>
                            <ul class="primary-nav">
                                <li><a href="tela_torneio.php">Torneios</a></li>
                                <?php
                                session_start();
                                if (isset($_SESSION['id'])) {
                                    echo "<a href='dados_usuario.php' class='btn-white btn-small'>" .$_SESSION['nome']. "</a>";
                                }else{
                                    echo "<a href='frm_login.php' class='btn-white btn-small'> Entrar </a>";
                                }

                               /*  if (!$_SESSION['logged']) {
                                    echo "<a href='login.html' class='btn-white btn-small'> Entrar </a>";
                                }else{
                                    echo "<a href='?logout=1' class='btn-white btn-small'> Sair </a>";

                                }*/
                                ?>

                                
                                <li><a href="funcionais/logout.php" style="margin-left: 5rem;">Sair</a></li>
                            </ul>
                            <ul class="member-actions">    
                            </ul>
                        </nav>
                    </div>
                    <div class="navicon">
                        <a class="nav-toggle" href="#"><span></span></a>
                    </div>
                </div>
            </header>
        </section>

            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')
    </script>
    <script src="bower_components/retina.js/dist/retina.js"></script>
    <script src="js/header/jquery.fancybox.pack.js"></script>
    <script src="js/header/bootstrap.min.js"></script>
    <script src="js/header/jquery.flexslider-min.js"></script>
    <script src="js/header/scripts.js"></script>
    <script src="js/bower_components/classie/classie.js"></script>
    <script src="js/bower_components/jquery-waypoints/lib/jquery.waypoints.min.js"></script>