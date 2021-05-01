<?php
require '../connect.php';
include_once '../validation.php';


    try {
        $pdo = new PDO($DB_INFO, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
        $stmt = $pdo->prepare('INSERT INTO cliente (nome) VALUES(:nome)');
        $stmt->execute(array(
          ':nome' => $nome
        ));
       
        echo $stmt->rowCount();
      } catch(PDOException $e) {
        echo 'Erro: ' . $e->getMessage();
      }
    