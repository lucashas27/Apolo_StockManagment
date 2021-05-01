<?php

require_once './views/index.php';
require_once './class/Cliente.php';


    // use ISSET as a shortly way to write array_key_exist() 
    // [VERIFICA SE A ARRAY EXISTE]

    if (isset($_POST['name'])) {
        $name = $_POST['name'] = preg_replace('/[^[:alnum:]_]/', '',$_POST['name']); 
    } else {    // o preg_replaca (alnum) irá eliminar todos os caracteres epeciais
        $name = '';
    }

    if (isset($_POST['age'])) {
        $age = $_POST['age'];
    } else {
        $age = '';
    }

    if (isset($_POST['gender'])) {
        $gender = $_POST['gender'] = preg_replace('/[^[:alnum:]_]/', '',$_POST['gender']);
    } else {
        $gender = '';
    }

    if (isset($_POST['adress'])) {
        $adress = $_POST['adress'] = preg_replace('/[^[:alnum:]_]/', '',$_POST['adress']);
    } else {
        $adress = '';
    }


//     $cliente1 = new Cliente($name, $age, $gender, $adress, 123123);
//   $nomeLucas = $cliente1->getNome();
//   $idadeLucas = $cliente1->getIdade();

//   var_dump($nomeLucas);



