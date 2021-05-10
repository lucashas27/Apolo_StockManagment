<form action="/update.php" method="post">
<input type="number" name ="id_input" value="id_input"> Digite o ID a ser deletado </input>
<button type="submit" value="Deletar" id="id_input">Atualizar</button>

<?php

require './connect.php';
include './validation.php';

  if (isset($_POST['id_input'])) {
  $id = $_POST['id_input'] = preg_replace('/[^[:alnum:]_]/', '',$_POST['id_input']);
  } else {
  $id = '';
  }

  try {
    $pdo = new PDO($DB_INFO, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare('UPDATE cliente SET nome = :nome WHERE id = :id');
    $stmt->execute(array(
      ':nome' => $name,
      ':id' => $id
    ));

  echo $stmt->rowCount();
  } 
  catch(PDOException $e) {
    echo 'Error: ' . $e->getMessage();
  }
?>
