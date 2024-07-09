<?php

include "conn.php";

$codTor=$_POST['idTorneio'];

$consulta = mysqli_query($conn, "select count(id_jogos) as idJogos from tb_jogos where cod_torneio = $codTor");

$idJogos = mysqli_fetch_object($consulta);

$dados_time = $idJogos->idJogos;

echo $dados_time;

?>

