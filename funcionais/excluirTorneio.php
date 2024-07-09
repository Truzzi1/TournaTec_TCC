<?php

include "conn.php";
$nome=$_POST["nomeTorn"];
$idTor3=$_POST['idTorneio'];

$sql1  = "delete from tb_time where $idTor3 = cod_torneio;";
$sql2 = "delete from tb_jogos where $idTor3 = cod_torneio;";
$sql3 = "delete from tb_torneio where $idTor3 = id_torneio;";

$conn->query($sql1);
$conn->query($sql2);
$conn->query($sql3);

echo "<script>
          alert('Time $nome Excluido');
      </script>
      <meta http-equiv='refresh' content='0, url=../tela_torneio.php'>
";
?>