<?php
include "funcionais/header_ref.php";
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Tela Torneio </title>

	<style>
		.principal {
			width: 1170px;
			left: calc(50% - 1170px / 2);
			display: flex;
			position: fixed;
			top: 14rem;
			justify-content: flex-start;
			flex-wrap: wrap;
			box-sizing: border-box;
			gap: 2rem;
			align-items: flex-start;
			scrollbar-width: none;
		}
		
		.torneio {
    	border: 0.2rem solid black;
		}
		a.torneio {
    	height: 8rem !important;
		}

		.principal::-webkit-scrollbar {
			height: 0;
			width: 0 !important;
		}

		.principal .torneio {
			background-color: darkred;
			border-radius: 20px;
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			height: fit-content;
			color: white;
			padding: 2.5rem 5rem;
			font-size: 2.5rem;
			font-weight: 500;
			min-width: calc(100% / 4 - 2rem);
			--torneio-n: calc(var(--torneio-n) + 1);
			box-sizing: border-box;
		}
		.principal .torneio:hover{
            background-color: #cd0000;
            cursor: pointer;
        }

	</style>
</head>

<body> 
	<main class="principal"> 
	<?php
     include_once "funcionais/conexao.php";
	 $idUsuario = $_SESSION['id'];
     $logged = $_SESSION['id'] ?? null;
     if (!$logged) die('Faça o login para ter acesso a página');

     $comandoSql = "select t.id_torneio, t.nome_torneio, t.cod_usuario, u.nome_usuario from tb_usuario u, tb_torneio t where t.cod_usuario = u.id_usuario";

    $resultado = $pdo->query($comandoSql);

    while ($linha = $resultado->fetch(PDO::FETCH_ASSOC)){ 
        $nome_torneio=$linha["nome_torneio"];
		$cod_usuario=$linha["cod_usuario"]; 
		$nome_usuario=$linha["nome_usuario"]; 

		$_SESSION['id_torneio'] = $linha['id_torneio'];

		$idTorneio = $_SESSION['id_torneio'];

		if ($idUsuario == $cod_usuario) {
			$acessoEdicao = "";
		} else {
			$acessoEdicao = "_ver";
		}

        echo "<a type='submit' id='$idTorneio' class='torneio' href='../tcc/listarTimes$acessoEdicao.php?Torneio=$nome_torneio' name='nomeTor' value='{$nome_torneio}'>{$nome_torneio}<span style='color: black; font-size: 12px;'>Criador: {$nome_usuario} </span></a>";
		echo "<input type='hidden' class='idUsuario' id='codUsuario' value='$cod_usuario'>";
    }
	echo "<a href='criar_torneios.php' class='torneio'>". 'Adicionar Torneio' ."</a>";

	echo "<input type='hidden' class='idUsuario' id='idUsuario' value='$idUsuario'>"

	?>
		<!-- criar um pesquisa torneio. 
			 dentro dele terá um select procurando se  o torneio ja tem registro na tabela jogo.
			 caso não tenha abrirá a tela de adicionar times e opção de sortear o chaveamento-->
	</main>
</body>

</html>