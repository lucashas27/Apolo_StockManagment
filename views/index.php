<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    






<?php 
require '../controllers/insert.php'
?>





<!-- FORM CADASTRO CLIENTES  -->


<form action="../controllers/validation.php" method="post">
  <p> Nome: <input type="text" name="name" /></p>
  <p> Idade: <input type="number" name="age" /></p>
<div class="gender">
<p>Genero:</p>
<input type="radio" id="male" name="gender" value="male">
<label for="male">Masculino</label><br>
<input type="radio" id="female" name="gender" value="female">
<label for="female">Feminino</label><br>
<input type="radio" id="other" name="gender" value="other">
<label for="other">Outros</label>
</div>

  <p> Endereço: <input type="text" name="adress" /></p>
  <p> CPF: <input type="number" name="cpf" /></p>
  <p><input type="submit"></p>
</form>


</body>
</html>










