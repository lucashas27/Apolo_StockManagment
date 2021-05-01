<?php

require_once '../views/index.php';
require_once './class/Cliente.php';
// require './insert.php';

    // use ISSET as a shortly way to write array_key_exist() 
    // [VERIFICA SE A ARRAY EXISTE]

    if (isset($_POST['name'])) {
        $name = $_POST['name'];
    } else {
        $name = '';
    }

    if (isset($_POST['age'])) {
        $age = $_POST['age'];
    } else {
        $age = '';
    }

    if (isset($_POST['gender'])) {
        $gender = $_POST['gender'];
    } else {
        $gender = '';
    }

    if (isset($_POST['adress'])) {
        $adress = $_POST['adress'];
    } else {
        $adress = '';
    }


    $cliente1 = new Cliente($name, $age, $gender, $adress, 123123);
    $nomeCliente1 = $cliente1->getNome();
    if ($nomeCliente1 === 'Lucas') {
        echo 'Bem vindo Lucas';
    } else {
        echo 'Você não é o Lucas';
    }
 
var_dump($nomeCliente1->name);
die;


    try {
        $pdo = new PDO($DB_INFO, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
        $stmt = $pdo->prepare('INSERT INTO cliente (nome) VALUES(:nome)');
        $stmt->execute(array(
          ':nome' => 'Lucas',
        ));
       
        echo $stmt->rowCount();
      } catch(PDOException $e) {
        echo 'Erro: ' . $e->getMessage();
      }
    