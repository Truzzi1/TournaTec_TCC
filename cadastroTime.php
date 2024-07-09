<?php
      $idTor2=$_GET['idTorneio'];
?>

<!DOCTYPE html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <title> Cadastro</title>
  <link rel="stylesheet" href="css/cadastroTimes.css">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body style="background-color: #31343b;">
  <header>
    <a href="index.php"><img src="img/tournatec_logo.png"></a>
    <p>Cadastre seus Times</p>
  </header>
  <div class="container">
    <!---->
    <main class="form-signin">
      <!--  <form action="cadastraUsuario.php" method="POST"> -->
      <form action="funcionais/cadastraTime.php" method="POST">
        <h1 class="form__title">Cadastrar Time </h1>
        <div class="form-group">
          <label for="nome" class="form__text">Nome do Time</label><br><br>
          <input type="text" class="form__input" id="nome" name="nome" placeholder="Nome">
          <input type="hidden" name="idTorneio">
        </div>
        <br><br>
        <?php echo "<button class='form__button' type='submit' id='botaoCadastra'>Cadastrar</button>
        <input type='hidden' name='idTorneio' value='$idTor2'>"?>
        <p></p>
      </form>
            <input type="hidden" name="idTorneio">
            </form>
      <a href="tela_torneio.php"><button id="botaoVoltar" class="form__button1">Voltar</button></a>
    </main>
  </div>
</body>