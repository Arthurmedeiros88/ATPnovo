<?php
    include "config.php";

    if(isset($_POST['submit'])) {
       $nome = $_POST['nome'];
       $sob_nome = $_POST['sobrenome'];
       $email = $_POST['email'];
       $senha = $_POST['senha'];
       $genero = $_POST['genero'];
    }

    $sql = "INSERT INTO users (nome, sobrenome, email, senha, genero) VALUES ('$nome', '$sob_nome', '$email', '$senha', '$genero')";

    $result = $conn->query($sql);

    if($result == TRUE) {
        echo "Registro criado com sucesso";
    }
    else {
        echo "Erro:" . $sql. "<br>". $conn->error;
    }

    $conn->close();



?>

<!DOCTYPE html>
<html>
<body>

<h2> Formulário de Assinaturas</h2>

<form actions="" method="POST">
    <fieldset>
    <legend> Informação Pessoal:</legend>
    Nome:<br>
    <input type="text" name="nome">
    <br>
    Sobrenome:<br>
    <input type="text" name="sobrenome">
    <br>
    Email:<br>
    <input type="text" name="email">
    <br>
    Senha:<br>
    <input type="password" name="senha">
    <br>
    Gênero:<br>
    <input type="radio" name="genero" value="Masculino">Homem
    <input type="radio" name="genero" value="Feminino">Mulher
    <br><br>
    <input type="submit" name="submit" value="submit">
    </fieldset>
</form>

</body>
</html>
