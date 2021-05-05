<?php
require_once './views/index.php';
require_once './class/Cliente.php';
require './connect.php';
include './validation.php';

$id;


    try {
        $pdo = new PDO($DB_INFO, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
        $stmt = $pdo->prepare('INSERT INTO cliente (nome, endereco, genero, id) VALUES(:nome, :endereco, :genero, :id)');
        $stmt->execute(array(
          ':nome' => $name,
        //   ':idade' => $age,
          ':endereco' => $adress,
          ':genero' => $gender,
          ':id' => $id

        ));
       
        echo $stmt->rowCount();
      } catch(PDOException $e) {
        echo 'Erro: ' . $e->getMessage();
      }