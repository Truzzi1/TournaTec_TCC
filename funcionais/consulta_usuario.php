<?php

        include "conn.php";

        $query = mysqli_query($conn, "SELECT nome_usuario, email_usuario, senha_usuario from tb_usuario where id_usuario = ".$_SESSION["id"]);

        $torneioTor = mysqli_fetch_object($query);

        $res1 = $torneioTor->nome_usuario;

        $res2 = $torneioTor->email_usuario;
        $res3 = $torneioTor->senha_usuario;

    
?>