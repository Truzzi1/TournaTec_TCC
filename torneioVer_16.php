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

//Select Fase 4

$sqlSelectId4 = sprintf("SELECT id_jogos FROM tb_jogos WHERE cod_torneio = $cod_tor and fase = 4");

$sqlSelectId4_dados = mysqli_query($conn,$sqlSelectId4)or die (mysqli_error($erro));

$selectId4 = array();

while($resultado = mysqli_fetch_assoc($sqlSelectId4_dados)){
    $name = $resultado["id_jogos"];
	array_push($selectId4, $name);
}

//Time4
$sqlSelectNamef1 = sprintf("SELECT id_jogos, time1 FROM tb_jogos WHERE cod_torneio = $cod_tor and fase = 4");
$sqlSelectNamef2 = sprintf("SELECT id_jogos, time2 FROM tb_jogos WHERE cod_torneio = $cod_tor and fase = 4");

$sqlSelectNamef1_dados = mysqli_query($conn,$sqlSelectNamef1)or die (mysqli_error($erro));
$sqlSelectNamef2_dados = mysqli_query($conn,$sqlSelectNamef2)or die (mysqli_error($erro));

$times_name4_1 = array();
$times_name4_2 = array();

while($resultado = mysqli_fetch_assoc($sqlSelectNamef1_dados)){
    $name = $resultado["time1"];
	array_push($times_name4_1, $name);
}

while($resultado = mysqli_fetch_assoc($sqlSelectNamef2_dados)){
    $name = $resultado["time2"];
	array_push($times_name4_2, $name);
}

//Erro
$times_todos4 = array();

for($cadtime = 0; $cadtime < 2; $cadtime++){
    if(empty($times_name4_1[$cadtime])){
        array_push($times_todos4, "");
    } else {
        array_push($times_todos4, $times_name4_1[$cadtime]);
    }

    if(empty($times_name4_2[$cadtime])){
        array_push($times_todos4, "");
    } else {
        array_push($times_todos4, $times_name4_2[$cadtime]);
    }
};

//Select Fase 5

$sqlSelectId5 = sprintf("SELECT id_jogos FROM tb_jogos WHERE cod_torneio = $cod_tor and fase = 5");

$sqlSelectId5_dados = mysqli_query($conn,$sqlSelectId5)or die (mysqli_error($erro));

$selectId5 = array();

while($resultado = mysqli_fetch_assoc($sqlSelectId5_dados)){
    $name = $resultado["id_jogos"];
	array_push($selectId5, $name);
}

//Time5
$sqlSelectNameef1 = sprintf("SELECT t.nome_time, t.id_time, j.id_jogos from tb_time t, tb_jogos j WHERE j.cod_torneio = $cod_tor and j.fase = 5 AND t.nome_time = j.time1");

$sqlSelectNameef1_dados = mysqli_query($conn,$sqlSelectNameef1)or die (mysqli_error($erro));

$times_name5_1 = array();

while($resultado = mysqli_fetch_assoc($sqlSelectNameef1_dados)){
    $name = $resultado["nome_time"];
	array_push($times_name5_1, $name);
}


//Erro
$times_todos5 = array();

for($cadtime = 0; $cadtime < 1; $cadtime++){
    if(empty($times_name5_1[$cadtime])){
        array_push($times_todos5, "");
    } else {
        array_push($times_todos5, $times_name5_1[$cadtime]);
    }
};
?>
<link rel="stylesheet" type="text/css" href="css/sorteio.css" media="screen" />
<div class="div-page-only">

  <body>
    <div class="sorter-wrapper">
      <div class="group-join-wrapper">
        <div class="button-wrapper">
          <button class="button-style-1" name="btn1" id="btn1"><?php print_r($times_name[0]) ?></button>
          <button class="button-style-1" name="btn2" id="btn2"><?php print_r($times_name[1]) ?></button>
          <button class="button-style-1" name="btn3" id="btn3"><?php print_r($times_name[2]) ?></button>
          <button class="button-style-1" name="btn4" id="btn4"><?php print_r($times_name[3]) ?></button>
          <button class="button-style-1" name="btn5" id="btn5"><?php print_r($times_name[4]) ?></button>
          <button class="button-style-1" name="btn6" id="btn6"><?php print_r($times_name[5]) ?></button>
          <button class="button-style-1" name="btn7" id="btn7"><?php print_r($times_name[6]) ?></button>
          <button class="button-style-1" name="btn8" id="btn8"><?php print_r($times_name[7]) ?></button>
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
            <div class="start-button-line-3">
              <div class="start-button-line-border-top"></div>
              <div class="start-button-line-border-bottom"></div>
            </div>
            <div class="start-button-line-4">
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
            <div class="middle-button-line-3">
              <div class="middle-button-line-border">
                <div class="middle-button-line-border-top"></div>
                <div class="middle-button-line-border-bottom"></div>
              </div>
            </div>
            <div class="middle-button-line-4">
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
            <div class="end-button-line-3">
              <div class="end-button-line-border"></div>
            </div>
            <div class="end-button-line-4">
              <div class="end-button-line-border"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="group-join-wrapper">
        <div class="button-wrapper">
          <button class="button-style-1" name="btnp1" id="btnp1"><?php print_r($times_todos2[0]) ?></button>
          <button class="button-style-1" name="btnp2" id="btnp2"><?php print_r($times_todos2[1]) ?></button>
          <button class="button-style-1" name="btnp3" id="btnp3"><?php print_r($times_todos2[2]) ?></button>
          <button class="button-style-1" name="btnp4" id="btnp4"><?php print_r($times_todos2[3]) ?></button>
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
          <button class="button-style-1" name="btnf1" id="btnf1"><?php print_r($times_todos3[0]) ?></button>
          <button class="button-style-1" name="btnf2" id="btnf2"><?php print_r($times_todos3[1]) ?></button>
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
            <div class="end-button-line-border" style="height: calc(25% + calc(0.11rem / 2) + 2rem);"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="group-join-wrapper-final-center">
          <div class="group-join-wrapper-final">
            <div class="button-wrapper final">
            <button class="button-style-1" id="btne1"><?php print_r($times_todos4[0]) ?></button>
            <div class="final-line-wrapper">
              <div class="final-line">
              </div>
            </div>
            <button class="button-style-1" id="btnef"><?php print_r($times_todos5[0]) ?></button>
            <div class="final-line-wrapper">
              <div class="final-line">
              </div>
            </div>
            <button class="button-style-1" id="btne2"><?php print_r($times_todos4[1]) ?></button>
            </div>
          </div>
        </div>
      <div class="group-join-wrapper-right">
        <div class="button-wrapper">
          <button class="button-style-1" name="btnf3" id="btnf3"><?php print_r($times_todos3[2]) ?></button>
          <button class="button-style-1" name="btnf4" id="btnf4"><?php print_r($times_todos3[3]) ?></button>
        </div>
        <div class="button-line-wrapper">
        <div class="end-button-line-wrapper">
            <div class="end-button-line-1">
            <div class="end-button-line-border" style="height: calc(75% - calc(0.11rem / 2) - 2rem);"></div>
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
          <div class="start-button-line-wrapper">
            <div class="start-button-line-1">
              <div class="start-button-line-border-top"></div>
              <div class="start-button-line-border-bottom"></div>
            </div>

          </div>
        </div>
      </div>
      <div class="group-join-wrapper-right">
      <div class="button-wrapper">
          <button class="button-style-1" name="btnp5" id="btnp5"><?php print_r($times_todos2[4]) ?></button>
          <button class="button-style-1" name="btnp6" id="btnp6"><?php print_r($times_todos2[5]) ?></button>
          <button class="button-style-1" name="btnp7" id="btnp7"><?php print_r($times_todos2[6]) ?></button>
          <button class="button-style-1" name="btnp8" id="btnp8"><?php print_r($times_todos2[7]) ?></button>
        </div>
        <div class="button-line-wrapper">
        <div class="end-button-line-wrapper">
            <div class="end-button-line-1">
              <div class="end-button-line-border"></div>
            </div>
            <div class="end-button-line-2">
              <div class="end-button-line-border"></div>
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

        </div>
      </div>
      <div class="group-join-wrapper-right">
        <div class="button-wrapper">
          <button class="button-style-1" name="btn9" id="btn9"><?php print_r($times_name[8]) ?></button>
          <button class="button-style-1" name="btn10" id="btn10"><?php print_r($times_name[9]) ?></button>
          <button class="button-style-1" name="btn11" id="btn11"><?php print_r($times_name[10]) ?></button>
          <button class="button-style-1" name="btn12" id="btn12"><?php print_r($times_name[11]) ?></button>
          <button class="button-style-1" name="btn13" id="btn13"><?php print_r($times_name[12]) ?></button>
          <button class="button-style-1" name="btn14" id="btn14"><?php print_r($times_name[13]) ?></button>
          <button class="button-style-1" name="btn15" id="btn15"><?php print_r($times_name[14]) ?></button>
          <button class="button-style-1" name="btn16" id="btn16"><?php print_r($times_name[15]) ?></button>

        </div>
        <div class="button-line-wrapper">
        <div class="end-button-line-wrapper">
            <div class="end-button-line-1">
              <div class="end-button-line-border"></div>
            </div>
            <div class="end-button-line-2">
              <div class="end-button-line-border"></div>
            </div>
            <div class="end-button-line-3">
              <div class="end-button-line-border"></div>
            </div>
            <div class="end-button-line-4">
              <div class="end-button-line-border"></div>
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
            <div class="middle-button-line-3">
              <div class="middle-button-line-border">
                <div class="middle-button-line-border-top"></div>
                <div class="middle-button-line-border-bottom"></div>
              </div>
            </div>
            <div class="middle-button-line-4">
              <div class="middle-button-line-border">
                <div class="middle-button-line-border-top"></div>
                <div class="middle-button-line-border-bottom"></div>
              </div>
            </div>
          </div>
          <div class="start-button-line-wrapper">
            <div class="start-button-line-1">
              <div class="start-button-line-border-top"></div>
              <div class="start-button-line-border-bottom"></div>
            </div>
            <div class="start-button-line-2">
              <div class="start-button-line-border-top"></div>
              <div class="start-button-line-border-bottom"></div>
            </div>
            <div class="start-button-line-3">
              <div class="start-button-line-border-top"></div>
              <div class="start-button-line-border-bottom"></div>
            </div>
            <div class="start-button-line-4">
              <div class="start-button-line-border-top"></div>
              <div class="start-button-line-border-bottom"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="js/sorter/script.sorter16.js"></script> 
    </body>
</div>