<?php
    if(!empty($_POST)) {
        include "conn.php";
        session_start();

        $nome = $_POST["nome_usuario"];
        $email = $_POST["email_usuario"];
        $senha = $_POST["senha_usuario"];

        $query = "UPDATE tb_usuario SET nome_usuario = ?, email_usuario = ?, senha_usuario = ? WHERE id_usuario = ".$_SESSION["id"];

        if($stmt = mysqli_prepare($conn, $query)) { 

            mysqli_stmt_bind_param($stmt, "sss", $nome, $email, $senha);

            mysqli_stmt_execute($stmt);

        }else {
            //echo 'erro_bd';
            echo mysqli_error($conn);
            die();
        }

        echo "concluido";
        mysqli_close($conn);
        unset($_SESSION['id']);
        echo "<script> alert('Por favor faça o login novamente '); </script>";
        echo "<script> window.location.replace('../index.php'); </script>";
    }
?>