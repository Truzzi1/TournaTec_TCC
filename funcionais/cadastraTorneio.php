<?php
 include_once "conn.php";
 session_start();
  /*2- pegando os dados vindos do formulario e armazenando em variaveis */
  $nome_torneio = filter_input(INPUT_POST,'nome');
  $modalidade = filter_input(INPUT_POST,'modalidade');
  $quantidade = filter_input(INPUT_POST,'quantidade');
  $usuario = $_SESSION['id'];

  /*3- criando o comando sql para insercao do registro */
  $result_torneio="Insert into tb_torneio
  (nome_torneio,modalidade,quantidade_time,cod_usuario) 
  values 
  ('$nome_torneio','$modalidade','$quantidade','$usuario')";

  /*4- executando o comando sql */
  $resultado=mysqli_query($conn,$result_torneio);
  //$resultado=$pdo->query($result_torneio);

  /*5- verificando se o comando sql foi executado */
  if($resultado==true){
    
  	  echo "Torneio criado com sucesso";

  }else{
    echo "Erro on cadastro";

  }
?>
