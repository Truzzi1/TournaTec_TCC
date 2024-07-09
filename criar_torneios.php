<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <link rel="stylesheet" href="css/ctorneios.css">
    <title>Criar Torneio</title>
</head>

<body>

<?php
include "funcionais/header_ref.php";
include_once "funcionais/conn.php";

?>

    <section class="form-container">
        
    <span class="material-symbols-outlined" style="color: #ffffff;">workspace_premium</span><i class="cria-torn" style="color: #ffffff !important;">Criação de Torneios</i><br>


       <!-- <form class="form-torneio" action="criar_torneio.js" method="POST"> -->
           <form class="form-torneio">
            <input type="text" name="nome" id="nome" placeholder="Digite o nome do torneio" style="color: #ffffff !important;" maxlength="100"
                autocomplete="off" required>
            <select name="modalidade" id="modalidade" style="color: #ffffff !important;">
                <option value="">Selecione a modalidade</option>
                <option value=Futebol id="modalidade">Futebol</option>
                <option value=Volei id="modalidade">Volei</option>
                <option value=Basquete id="modalidade">Basquete</option>
                <option value=PingPong id="modalidade">PingPong</option>
            </select>
            <select name="quantidade" id="quantidade" style="color: #ffffff !important;" required>
                <option value="">Selecione a quantidade de times</option>
                <option value=4  id="quantidade">4 times</option>
                <option value=8 id="quantidade">8 times</option>
                <option value=16 id="quantidade">16 times</option>
            </select>
            <div class="buttons">
                <input type="button" class="button" value="Criar" id="botaoCriarTorneio">
                
                <input type="reset" class="button"  value="Limpar">
            </div>
        </form>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="js/validacao/criar_torneio.js"></script>
</body>

</html>