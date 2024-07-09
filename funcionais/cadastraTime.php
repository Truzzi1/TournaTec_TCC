<?php

include "conn.php";
$nome=$_POST["nome"];
$idTor3=$_POST['idTorneio'];

$sql = "INSERT INTO tb_time (nome_time, cod_torneio) 
        VALUES ('$nome', $idTor3)";

$conn->query($sql);

echo "<script>
          alert('Time $nome Cadastrado');
      </script>
      <meta http-equiv='refresh' content='0, url=../tela_torneio.php'>
";
?>