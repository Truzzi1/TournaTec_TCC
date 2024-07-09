<?php
include('conn.php');



/*if(empty($_POST['email']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}*/

$email = mysqli_real_escape_string($conn, $_POST['email']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);

$comandoSql = "select id_usuario, nome_usuario from tb_usuario where email_usuario='{$email}' and senha_usuario='{$senha}'";

$resultado = mysqli_query($conn, $comandoSql);

$row = mysqli_num_rows($resultado);

$valor = $resultado->fetch_assoc();

if ($row == 1 ) {
	session_start();
	$_SESSION['usuario'] = $email;
	$_SESSION['id'] = $valor['id_usuario'];
	$_SESSION['nome'] = $valor['nome_usuario'];
	echo $_SESSION['id'];
	exit();
}else {
	echo "Não encontrado";
	exit();
}



?>