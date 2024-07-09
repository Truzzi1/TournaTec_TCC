<?php
 //1- realizando a conexao com o banco de dados(local,usuario,senha,nomeBanco)
 //$con=mysqli_connect("localhost","root","","bd_projeto");
 //include "config.php";
 include_once "conexao.php";
  /*2- pegando os dados vindos do formulario e armazenando em variaveis */
  /*$nome=$_POST["nome"];
  $email=$_POST["email"];
  $senha=$_POST["senha"];*/
  $nome=filter_input(INPUT_POST,'nome');
  $email=filter_input(INPUT_POST,'email');
  $senha=filter_input(INPUT_POST,'senha');
  

  /*3- criando o comando sql para insercao do registro */
  $comandoSql="insert into tb_usuario
  (nome_usuario,email_usuario,senha_usuario) 
  values 
  ('$nome','$email','$senha')";


  /*4- executando o comando sql */
  //$resultado=mysqli_query($conn,$comandoSql);
  $resultado=$pdo->query($comandoSql);

  /*5- verificando se o comando sql foi executado */
  if($resultado==true){
    
  	  echo "Cadastrado com sucesso";

  }else{
    echo "Erro no cadastro";

  }
?>
