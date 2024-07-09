<?php
    include "conn.php";

    //Time config

    $cod_tor=$_POST['idTorneio'];

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

    //Select Fase 3

    $sqlSelectId3 = sprintf("SELECT id_jogos FROM tb_jogos WHERE cod_torneio = $cod_tor and fase = 3");

    $sqlSelectId3_dados = mysqli_query($conn,$sqlSelectId3)or die (mysqli_error($erro));

    $selectId3 = array();

    while($resultado = mysqli_fetch_assoc($sqlSelectId3_dados)){
        $name = $resultado["id_jogos"];
        array_push($selectId3, $name);
    }

    //Select Fase 4

    $sqlSelectId4 = sprintf("SELECT id_jogos FROM tb_jogos WHERE cod_torneio = $cod_tor and fase = 4");

    $sqlSelectId4_dados = mysqli_query($conn,$sqlSelectId4)or die (mysqli_error($erro));

    $selectId4 = array();

    while($resultado = mysqli_fetch_assoc($sqlSelectId4_dados)){
        $name = $resultado["id_jogos"];
        array_push($selectId4, $name);
    }
    //Time1

  
    $time1=$_POST['time1'];
    $time2=$_POST['time2'];
    $time3=$_POST['time3'];
    $time4=$_POST['time4'];

    $times = [$time1, $time2, $time3, $time4];
    var_dump($times);
    //Time2

    $timep1=$_POST['timep1'];
    $timep2=$_POST['timep2'];

    $times2 = [$timep1, $timep2];     

    //Time4

    $timeef=$_POST['timeef'];
    
    $times3 = [$timeef];     
    

    function odd($array){
        $timesimp = [];
        $timespar = [];
            for($i = 0; $i < count($array); $i++){
            if ($i & 1) {
                array_push($timesimp, $array[$i]);
            } else (array_push($timespar,  $array[$i]));
            } 
        return [$timesimp, $timespar]; 
        }
        //Time1
        $timesfil = odd($times);
        $timesimp = $timesfil[0];
        $timespar = $timesfil[1];
        //Time2
        $timesfil2 = odd($times2);

        $timesimp2 = $timesfil2[0];
        $timespar2 = $timesfil2[1];

            

    //Cadastro de Times

        print_r($selectId2);
        print_r($selectId3);
        print_r($selectId4);
          
    //Time1
    for($cadtime1 = 0; $cadtime1 < 2; $cadtime1++){

        $sql="";
        if($timesimp[$cadtime1] == 0){
            $sql="UPDATE tb_jogos SET time2 = null WHERE cod_torneio = $cod_tor and fase = 2 and id_jogos = $selectId2[$cadtime1];";
        }else{
            $sql="UPDATE tb_jogos SET time2 = '$timesimp[$cadtime1]' WHERE cod_torneio = $cod_tor and fase = 2 and id_jogos = $selectId2[$cadtime1];";
        }
        if ($conn->query($sql) === TRUE){
        } else {
            echo "Erro" . $conn->query;
        }
    };

    for($cadtime1 = 0; $cadtime1 < 2; $cadtime1++){

        $sql="";
        if($timesimp[$cadtime1] == 0){
            $sql="UPDATE tb_jogos SET time1 = null WHERE cod_torneio = $cod_tor and fase = 2 and id_jogos = $selectId2[$cadtime1];";
        }else{
            $sql="UPDATE tb_jogos SET time1 = '$timespar[$cadtime1]' WHERE cod_torneio = $cod_tor and fase = 2 and id_jogos = $selectId2[$cadtime1];";
        }

        if ($conn->query($sql) === TRUE){
        } else {
            echo "Erro" . $conn->query;
        }
    };
    

    //Time2

    for($cadtime2 = 0; $cadtime2 < 1; $cadtime2++){
    
        $sql="";
        if($timesimp2[$cadtime2] == 0){
            $sql="UPDATE tb_jogos SET time2 = null WHERE cod_torneio = $cod_tor and fase = 3 and id_jogos = $selectId3[$cadtime2];";
        }else{
            $sql="UPDATE tb_jogos SET time2 = '$timesimp2[$cadtime2]' WHERE cod_torneio = $cod_tor and fase = 3 and id_jogos = $selectId3[$cadtime2];";
        }
        if ($conn->query($sql) === TRUE){
        } else {
            echo "Erro" . $conn->query;
        }
    };

    for($cadtime2 = 0; $cadtime2 < 1; $cadtime2++){
        $sql="";
        if($timesimp2[$cadtime2] == 0){
            $sql="UPDATE tb_jogos SET time1 = null WHERE cod_torneio = $cod_tor and fase = 3 and id_jogos = $selectId3[$cadtime2];";
        }else{
            $sql="UPDATE tb_jogos SET time1 = '$timespar2[$cadtime2]' WHERE cod_torneio = $cod_tor and fase = 3 and id_jogos = $selectId3[$cadtime2];";
        }
        if ($conn->query($sql) === TRUE){
        } else {
            echo "Erro" . $conn->query;
        }
    };
    
    //Time3
    var_dump($times3);
    
        $sql="";
        if($times3[0] == 0){
            $sql="UPDATE tb_jogos SET time1 = null WHERE cod_torneio = $cod_tor and fase = 4 and id_jogos = $selectId4[0];";
        }else{
            $sql="UPDATE tb_jogos SET time1 = '$times3[0]' WHERE cod_torneio = $cod_tor and fase = 4 and id_jogos = $selectId4[0];";
        }
        if ($conn->query($sql) === TRUE){
        } else {
            echo "Erro" . $conn->query;
        }
?>