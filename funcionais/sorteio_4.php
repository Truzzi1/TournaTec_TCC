<?php 
  include "conexao.php";
  include "conn.php";

//Sorteio

$idTor4=$_POST['idTorneio'];

$sql_time = sprintf("select id_time, nome_time from tb_time where cod_torneio = $idTor4");

$dados_time = mysqli_query($conn,$sql_time)or die (mysqli_error($erro));

$times = array();

while($resultado = mysqli_fetch_assoc($dados_time)){
    $nome = $resultado["nome_time"];
	array_push($times, $nome);		
}

function odd($array)
{
  $times1 = [];
  $times2 = [];
    for($i = 0; $i < count($array); $i++){
      if ($i & 1) {
        array_push($times1, $array[$i]);
      } else (array_push($times2,  $array[$i]));
    } 
   return [$times1, $times2]; 
}

$timesfil = odd($times);
$times1 = $timesfil[0];
$times2 = $timesfil[1];

shuffle($times1);
shuffle($times2);

var_dump($times1,"1");
var_dump($times2,"2");

for($contador = 0; $contador < 2; $contador++){
  print_r($times[$contador]); echo "<br>";

  //Cadastro de Times
  $torneio="1";
  $time1=$times1[$contador];
  $time2=$times2[$contador];
  $fase="1";
 
  $comandoSql="INSERT INTO tb_jogos (cod_torneio, TIME1, TIME2, fase) VALUES ($idTor4, '$time1', '$time2', 1)";

  echo $comandoSql; 


  $resultado=$pdo->query($comandoSql);


  if($resultado==true){
    
  	  echo "Cadastrado com sucesso";

  }else{
    echo "Erro no cadastro";

  }
};

for($contador2 = 0; $contador2 < 1; $contador2++){

  $comandoSql2="INSERT INTO tb_jogos (cod_torneio, fase) VALUES ($idTor4, 2)";

  $resultado=$pdo->query($comandoSql2);
};

for($contador3 = 0; $contador3 < 1; $contador3++){

  $comandoSql3="INSERT INTO tb_jogos (cod_torneio, fase) VALUES ($idTor4, 3)";

  $resultado=$pdo->query($comandoSql3);
};
?>





