<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>




<div class="form_cadastro">
<!-- FORM CADASTRO CLIENTES  -->
<form action="../insert.php" method="post">
  <p> Nome: <input type="text" name="name" required="required" /></p>
  <p> Idade: <input type="number" name="age" required="required" /></p>
<div class="gender">
<p>Genero:</p>
<input type="radio" id="male" name="gender" value="male" required="required">
<label for="male">Masculino</label><br>
<input type="radio" id="female" name="gender" value="female" required="required">
<label for="female">Feminino</label><br>
<input type="radio" id="other" name="gender" value="other" required="required">
<label for="other">Outros</label>
</div>
  <p> Endereço: <input type="text" name="adress" required="required" /></p>
  <p> CPF: <input type="number" name="cpf" /></p>
  <p><input type="submit"/></p>
  </div>

<button type="submit" action="../delete.php" value="Deletar">Deletar</button>


</form>
</body>
</html>
