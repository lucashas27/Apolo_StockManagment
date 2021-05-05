<form action="/delete.php" method="post">
<input type="number" name ="id_input" value="id_input"> Digite o ID a ser deletado </input>
<button type="submit" value="Deletar" id="id_input">Deletar</button>

</form>

<?php
require_once './views/index.php';
require_once './class/Cliente.php';
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

  $stmt = $pdo->prepare('DELETE FROM cliente WHERE id = :id');
  $stmt->bindParam(':id', $id);
  $stmt->execute();

  echo $stmt->rowCount();
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
