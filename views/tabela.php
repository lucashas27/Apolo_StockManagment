<html>
    <head>
        <meta charset="UTF-8">
        <title>Agenda de contatos</title>
    </head>
    <body>

    <?php

require '../connect.php';

// Verificar se foi enviando dados via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = (isset($_POST["id"]) && $_POST["id"] != null) ? $_POST["id"] : "";
    $nome = (isset($_POST["nome"]) && $_POST["nome"] != null) ? $_POST["nome"] : "";
    $email = (isset($_POST["email"]) && $_POST["email"] != null) ? $_POST["email"] : "";
    $celular = (isset($_POST["celular"]) && $_POST["celular"] != null) ? $_POST["celular"] : NULL;
} else if (!isset($id)) {
    // Se não se não foi setado nenhum valor para variável $id
    $id = (isset($_GET["id"]) && $_GET["id"] != null) ? $_GET["id"] : "";
    $nome = NULL;
    $email = NULL;
    $celular = NULL;
}

?>


<form action="?act=save" method="POST" name="form1" >
    <h1>Agenda de contatos</h1>
    <hr>
    <input type="hidden" name="id" <?php
    // Preenche o id no campo id com um valor "value"
    if (isset($id) && $id != null || $id != "") {
        echo "value=\"{$id}\"";
    }
    ?> />
    Nome:
    <input type="text" name="nome" <?php
    // Preenche o nome no campo nome com um valor "value"
    if (isset($nome) && $nome != null || $nome != ""){
        echo "value=\"{$nome}\"";
    }
    ?> />
    E-mail:
    <input type="text" name="email" <?php
    // Preenche o email no campo email com um valor "value"
    if (isset($email) && $email != null || $email != ""){
        echo "value=\"{$email}\"";
    }
    ?> />
    Celular:
    <input type="text" name="celular" <?php
    // Preenche o celular no campo celular com um valor "value"
    if (isset($celular) && $celular != null || $celular != ""){
        echo "value=\"{$celular}\"";
    }
    ?> />
    <input type="submit" value="salvar" />
    <input type="reset" value="Novo" />
    <hr>
</form>


<?php

try {
    $pdo = new PDO($DB_INFO, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $stmt = $pdo->prepare('INSERT INTO contatos (nome, email, celular) VALUES(:nome, :email, :celular)');
    $stmt->execute(array(
        ':nome' => $nome,
        ':email' => $email,
        ':celular' => $celular,

    ));

    } 
    catch(PDOException $e) {
    echo 'Erro: ' . $e->getMessage();
    }
    if ($stmt->rowCount() > 0) {
        echo "Dados cadastrados com sucesso!";
    }
    ?>

<table border="1" width="100%">
    <tr>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Celular</th>
        <th>Ações</th>
    </tr>
    <?php
try {
 
    $stmt = $pdo->prepare("SELECT * FROM contatos");
 
        if ($stmt->execute()) {
            while ($rs = $stmt->fetch(PDO::FETCH_OBJ)) {
                echo "<tr>";
                echo "<td>".$rs->nome."</td><td>".$rs->email."</td><td>".$rs->celular
                           ."</td><td><center><a href=\"\">[Alterar]</a>"
                           ."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"
                           ."<a href=\"\">[Excluir]</a></center></td>";
                echo "</tr>";
            }
        } else {
            echo "Erro: Não foi possível recuperar os dados do banco de dados";
        }
} catch (PDOException $erro) {
    echo "Erro: ".$erro->getMessage();
}
?>
</table>

    </body>
</html>