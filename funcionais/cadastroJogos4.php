<?php

    include "conn.php";

    $cod_tor=$_POST['idTorneio'];

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

    //Time1

  
    $time1=$_POST['time1'];
    $time2=$_POST['time2'];

    $times = [$time1, $time2];
    var_dump($times); 

    //Time4

    $timeef=$_POST['timeef'];
    
    $times2 = [$timeef];     
    

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
          
    //Time1
    for($cadtime1 = 0; $cadtime1 < 1; $cadtime1++){

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

    for($cadtime1 = 0; $cadtime1 < 1; $cadtime1++){

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
    var_dump($times2);
    
        $sql="";
        if($times2[0] == 0){
            $sql="UPDATE tb_jogos SET time1 = null WHERE cod_torneio = $cod_tor and fase = 3 and id_jogos = $selectId3[0];";
        }else{
            $sql="UPDATE tb_jogos SET time1 = '$times2[0]' WHERE cod_torneio = $cod_tor and fase = 3 and id_jogos = $selectId3[0];";
        }
        if ($conn->query($sql) === TRUE){
        } else {
            echo "Erro" . $conn->query;
        }
?>