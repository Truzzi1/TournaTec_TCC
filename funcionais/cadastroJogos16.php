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

    //Select Fase 5

    $sqlSelectId5 = sprintf("SELECT id_jogos FROM tb_jogos WHERE cod_torneio = $cod_tor and fase = 5");

    $sqlSelectId5_dados = mysqli_query($conn,$sqlSelectId5)or die (mysqli_error($erro));

    $selectId5 = array();

    while($resultado = mysqli_fetch_assoc($sqlSelectId5_dados)){
        $name = $resultado["id_jogos"];
        array_push($selectId5, $name);
    }

    //Time1

  
    $time1=$_POST['time1'];
    $time2=$_POST['time2'];
    $time3=$_POST['time3'];
    $time4=$_POST['time4'];
    $time5=$_POST['time5'];
    $time6=$_POST['time6'];
    $time7=$_POST['time7'];
    $time8=$_POST['time8'];

    $times = [$time1, $time2, $time3, $time4, $time5, $time6, $time7, $time8];

    //Time2

    $timep1=$_POST['timep1'];
    $timep2=$_POST['timep2'];
    $timep3=$_POST['timep3'];
    $timep4=$_POST['timep4'];

    $times2 = [$timep1, $timep2, $timep3, $timep4];     

    //Time3

    $timef1=$_POST['timef1'];
    $timef2=$_POST['timef2'];
    
    $times3 = [$timef1, $timef2];     
    
    //Time4

    $timeef=$_POST['timeef'];
    
    $times4 = [$timeef];     
    

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
        //Time3
        $timesfil3 = odd($times3);
        $timesimp3 = $timesfil3[0];
        $timespar3 = $timesfil3[1];

            

    //Cadastro de Times

        print_r($selectId2);
        print_r($selectId3);
        print_r($selectId4);
        print_r($selectId5);
          
    //Time1
    for($cadtime1 = 0; $cadtime1 < 4; $cadtime1++){

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

    for($cadtime1 = 0; $cadtime1 < 4; $cadtime1++){

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

    for($cadtime2 = 0; $cadtime2 < 2; $cadtime2++){
    
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

    for($cadtime2 = 0; $cadtime2 < 2; $cadtime2++){
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
    for($cadtime3 = 0; $cadtime3 < 1; $cadtime3++){
    
        $sql="";
        if($timesimp3[$cadtime3] == 0){
            $sql="UPDATE tb_jogos SET time2 = null WHERE cod_torneio = $cod_tor and fase = 4 and id_jogos = $selectId4[$cadtime3];";
        }else{
            $sql="UPDATE tb_jogos SET time2 = '$timesimp3[$cadtime3]' WHERE cod_torneio = $cod_tor and fase = 4 and id_jogos = $selectId4[$cadtime3];";
        }
        if ($conn->query($sql) === TRUE){
        } else {
            echo "Erro" . $conn->query;
        }
    };

    for($cadtime3 = 0; $cadtime3 < 1; $cadtime3++){

        $sql="";
        if($timesimp3[$cadtime3] == 0){
            $sql="UPDATE tb_jogos SET time1 = null WHERE cod_torneio = $cod_tor and fase = 4 and id_jogos = $selectId4[$cadtime3];";
        }else{
            $sql="UPDATE tb_jogos SET time1 = '$timespar3[$cadtime3]' WHERE cod_torneio = $cod_tor and fase = 4 and id_jogos = $selectId4[$cadtime3];";
        }
        if ($conn->query($sql) === TRUE){
        } else {
            echo "Erro" . $conn->query;
        }
    };

    //Time4
    var_dump($times4);
    
        $sql="";
        if($times4[0] == 0){
            $sql="UPDATE tb_jogos SET time1 = null WHERE cod_torneio = $cod_tor and fase = 5 and id_jogos = $selectId5[0];";
        }else{
            $sql="UPDATE tb_jogos SET time1 = '$times4[0]' WHERE cod_torneio = $cod_tor and fase = 5 and id_jogos = $selectId5[0];";
        }
        if ($conn->query($sql) === TRUE){
        } else {
            echo "Erro" . $conn->query;
        }
?>