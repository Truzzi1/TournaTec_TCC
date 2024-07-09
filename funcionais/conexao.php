<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=bd_interclasse', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
   // echo "Conexao ok";
    
} catch(PDOException $e) {
    echo "Erro na conexao: " . $e->getMessage();
   }

   ?>