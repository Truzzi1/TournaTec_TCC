<?php
include "funcionais/header_ref.php";
include "funcionais/conn.php";
?>
<link rel="stylesheet" href="css/listarTimes.css">

<div class="div-listarTimes">
<div class="div2-listarTimes">

<?php

$nomeTor=$_GET['Torneio'];

$consultaTor = mysqli_query($conn, "select id_torneio, quantidade_time from tb_torneio where nome_torneio = '$nomeTor'");

$torneioTor = mysqli_fetch_object($consultaTor);

$idTor = $torneioTor->id_torneio;

$quantTor = $torneioTor->quantidade_time;

$_SESSION['id_torneio'] = $idTor;


$consultaTor1 = mysqli_query($conn, "SELECT id_time, nome_time FROM tb_time where cod_torneio = $idTor");

$consulta3 = mysqli_query($conn, "SELECT COUNT(id_time) as total FROM tb_time WHERE cod_torneio = $idTor");

$torneio3 = mysqli_fetch_object($consulta3);

$idCount = $torneio3->total;

?>

<?php

    echo "<div style='font-size: 25px; color: red;'>$nomeTor</div>";

    while($aux = mysqli_fetch_assoc($consultaTor1)) { 
      echo "<div style='display: flex; justify-content: space-between; align-items: center;'>Nome:".$aux["nome_time"].
      "<form style='margin: unset;' action='funcionais/excluirTime.php' method='POST'>
      <input type='hidden' name='idTorneio' value='$idTor'>
      <input type='hidden' name='nomeTeam' value='".$aux["nome_time"]."' />
      <input type='submit' class='material-symbols-rounded' value='close'>
      </form>".
      "</div>"; 
      }
    echo "<input id='TotTeams' type='hidden' value='$idCount' />";
    echo "<input id='idTorneio' type='hidden' value='$idTor' />";
    echo "<input id='quantTimes' type='hidden' value='$quantTor' />";
session_abort();
?>
</div>
<?php
    echo "
    
      <button style='margin: unset; margin-top: 10px;' class='button-clear' id='btnAddTime' type='submit' value='btnadd'>Adicionar Time</button>
    
      <button style='margin: unset; margin-top: 10px;' class='button-clear' id='btnSorter' type='submit' value='btnsave'>Chaveamento</button>

      <form style='margin: unset; margin-top: 0px;' action='funcionais/excluirTorneio.php' method='POST'>
      <input type='hidden' name='idTorneio' value='$idTor'>
      <input type='hidden' name='nomeTorn' value='$nomeTor'/>
      <input type='submit' class='button-clear' value='Excluir Torneio'>
      </form>
    </div>
</div>"?>

<script src="js/validacao/script.listarTimes.js"></script>
