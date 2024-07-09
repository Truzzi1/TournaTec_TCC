<?php

include "funcionais/header_ref.php";
include "funcionais/conn.php";

//Time config

$cod_tor=$_GET['idTorneio'];

//Select Fase 1

$times_sorter = sprintf("SELECT t.nome_time, t.id_time, j.id_jogos from tb_time t, tb_jogos j WHERE j.fase = 1  and t.cod_torneio = $cod_tor AND (t.nome_time = j.time1 or t.nome_time = j.time2) ORDER BY j.id_jogos");

$time_sorter_dados = mysqli_query($conn,$times_sorter)or die (mysqli_error($erro));

$times_name = array();

while($resultado = mysqli_fetch_assoc($time_sorter_dados)){
    $name = $resultado["nome_time"];
	array_push($times_name, $name);
}

//Select Fase 2

$sqlSelectId = sprintf("SELECT id_jogos FROM tb_jogos WHERE cod_torneio = $cod_tor and fase = 2");

$sqlSelectId_dados = mysqli_query($conn,$sqlSelectId)or die (mysqli_error($erro));

$selectId2 = array();

while($resultado = mysqli_fetch_assoc($sqlSelectId_dados)){
    $name = $resultado["id_jogos"];
	array_push($selectId2, $name);
}

//Time2
$sqlSelectName1 = sprintf("SELECT id_jogos, time1 FROM tb_jogos WHERE cod_torneio = $cod_tor and fase = 2");
$sqlSelectName2 = sprintf("SELECT id_jogos, time2 FROM tb_jogos WHERE cod_torneio = $cod_tor and fase = 2");

$sqlSelectName1_dados = mysqli_query($conn,$sqlSelectName1)or die (mysqli_error($erro));
$sqlSelectName2_dados = mysqli_query($conn,$sqlSelectName2)or die (mysqli_error($erro));

$times_name2_1 = array();
$times_name2_2 = array();

while($resultado = mysqli_fetch_assoc($sqlSelectName1_dados)){
    $name = $resultado["time1"];
	array_push($times_name2_1, $name);
}

while($resultado = mysqli_fetch_assoc($sqlSelectName2_dados)){
    $name = $resultado["time2"];
	array_push($times_name2_2, $name);
}

//Erro
$times_todos2 = array();

for($cadtime = 0; $cadtime < 4; $cadtime++){
    if(empty($times_name2_1[$cadtime])){
        array_push($times_todos2, "");
    } else {
        array_push($times_todos2, $times_name2_1[$cadtime]);
    }
    if(empty($times_name2_2[$cadtime])){
        array_push($times_todos2, "");
    } else {
        array_push($times_todos2, $times_name2_2[$cadtime]);
    }
};

//Select Fase 3

$sqlSelectId3 = sprintf("SELECT id_jogos FROM tb_jogos WHERE cod_torneio = $cod_tor and fase = 3");

$sqlSelectId3_dados = mysqli_query($conn,$sqlSelectId3)or die (mysqli_error($erro));

$selectId3 = array();

while($resultado = mysqli_fetch_assoc($sqlSelectId3_dados)){
    $name = $resultado["id_jogos"];
	array_push($selectId3, $name);
}

//Time3
$sqlSelectNamep1 = sprintf("SELECT id_jogos, time1 FROM tb_jogos WHERE cod_torneio = $cod_tor and fase = 3");
$sqlSelectNamep2 = sprintf("SELECT id_jogos, time2 FROM tb_jogos WHERE cod_torneio = $cod_tor and fase = 3");

$sqlSelectNamep1_dados = mysqli_query($conn,$sqlSelectNamep1)or die (mysqli_error($erro));
$sqlSelectNamep2_dados = mysqli_query($conn,$sqlSelectNamep2)or die (mysqli_error($erro));

$times_name3_1 = array();
$times_name3_2 = array();

while($resultado = mysqli_fetch_assoc($sqlSelectNamep1_dados)){
    $name = $resultado["time1"];
	array_push($times_name3_1, $name);
}

while($resultado = mysqli_fetch_assoc($sqlSelectNamep2_dados)){
    $name = $resultado["time2"];
	array_push($times_name3_2, $name);
}

//Erro
$times_todos3 = array();

for($cadtime = 0; $cadtime < 4; $cadtime++){
    if(empty($times_name3_1[$cadtime])){
        array_push($times_todos3, "");
    } else {
        array_push($times_todos3, $times_name3_1[$cadtime]);
    }
    if(empty($times_name3_2[$cadtime])){
        array_push($times_todos3, "");
    } else {
        array_push($times_todos3, $times_name3_2[$cadtime]);
    }
};




?>
<link rel="stylesheet" type="text/css" href="css/sorteio.css" media="screen" />
<div class="div-page-only">
  <body>
    <div class="sorter-wrapper">
      <div class="group-join-wrapper">
        <div class="button-wrapper">
          <button class="button-style-1" id="btn1"><?php print_r($times_name[0]) ?></button>
          <button class="button-style-1" id="btn2"><?php print_r($times_name[1]) ?></button>
          <button class="button-style-1" id="btn3"><?php print_r($times_name[2]) ?></button>
          <button class="button-style-1" id="btn4"><?php print_r($times_name[3]) ?></button>

        </div>
        <div class="button-line-wrapper">
          <div class="start-button-line-wrapper">
            <div class="start-button-line-1">
              <div class="start-button-line-border-top"></div>
              <div class="start-button-line-border-bottom"></div>
            </div>
            <div class="start-button-line-2">
              <div class="start-button-line-border-top"></div>
              <div class="start-button-line-border-bottom"></div>
            </div>
          </div>
          <div class="middle-button-line-wrapper">
            <div class="middle-button-line-1">
              <div class="middle-button-line-border">
                <div class="middle-button-line-border-top"></div>
                <div class="middle-button-line-border-bottom"></div>
              </div>
            </div>
            <div class="middle-button-line-2">
              <div class="middle-button-line-border">
                <div class="middle-button-line-border-top"></div>
                <div class="middle-button-line-border-bottom"></div>
              </div>
            </div>
          </div>
          <div class="end-button-line-wrapper">
            <div class="end-button-line-1">
              <div class="end-button-line-border"></div>
            </div>
            <div class="end-button-line-2">
              <div class="end-button-line-border"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="group-join-wrapper">
        <div class="button-wrapper">
          <button class="button-style-1" id="btnf1"><?php print_r($times_todos2[0]) ?></button>
          <button class="button-style-1" id="btnf2"><?php print_r($times_todos2[1]) ?></button>
        </div>
        <div class="button-line-wrapper">
          <div class="start-button-line-wrapper">
            <div class="start-button-line-1">
              <div class="start-button-line-border-top"></div>
              <div class="start-button-line-border-bottom"></div>
            </div>

          </div>
          <div class="middle-button-line-wrapper">
            <div class="middle-button-line-1">
              <div class="middle-button-line-border">
                <div class="middle-button-line-border-top"></div>
                <div class="middle-button-line-border-bottom"></div>
              </div>
            </div>
          </div>
          <div class="end-button-line-wrapper">
            <div class="end-button-line-1">
              <div class="end-button-line-border"></div>
            </div>


          </div>
        </div>
      </div>
      <div class="group-join-wrapper">
        <div class="button-wrapper" style="width: 100%;">
          <button class="button-style-1" id="btne"><?php print_r($times_todos3[0]) ?></button>
        </div>
        </div>
      </div>
    </div>
    <script src="js/sorter/script.sorter4.js"></script>
  </body>
</div>