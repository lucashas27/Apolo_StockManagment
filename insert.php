<?php
require_once './views/index.php';
require_once './class/Cliente.php';
require './connect.php';
include './validation.php';


    try {
        $pdo = new PDO($DB_INFO, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
        $stmt = $pdo->prepare('INSERT INTO cliente (nome, idade, endereco, genero) VALUES(:nome, :idade, :endereco, :genero)');
        $stmt->execute(array(
          ':nome' => $name,
          ':idade' => $age,
          ':endereco' => $adress,
          ':genero' => $gender

        ));
       
        echo $stmt->rowCount();
      } catch(PDOException $e) {
        echo 'Erro: ' . $e->getMessage();
      }