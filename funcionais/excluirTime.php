<?php

include "conn.php";
$nome=$_POST["nomeTeam"];
$idTor3=$_POST['idTorneio'];

$sql1 = "delete from tb_time where '$nome' = nome_time and $idTor3 = cod_torneio;";

$sql2 = "delete from tb_jogos where $idTor3 = cod_torneio;";

$conn->query($sql1);

$conn->query($sql2);

echo "<script>
          alert('Time $nome Excluido');
      </script>
      <meta http-equiv='refresh' content='0, url=../tela_torneio.php'>
";
?>