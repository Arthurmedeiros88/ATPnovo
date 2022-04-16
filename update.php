<?php
    include "config.php";

    if(isset($_POST['update'])) {
        $nome =$_POST['nome'];
        $user_id =$_POST['id'];
        $sob_nome =$_POST['sobrenome'];
        $email =$_POST['email'];
        $senha =$_POST['senha'];
        $genero =$_POST['genero'];

        $sql = "UPDATE users SET nome='$nome', sobrenome='$sob_nome', email='$email', senha='$senha', genero='$genero' WHERE id='$user_id'";

        $result = $conn->query($sql);

        if($result == TRUE) {
            echo "Dados Atualizados com Sucesso";
        }
        else {
            echo "Erro:". $sql . "<br>" . $conn->error;
        }
    }

    if(isset($_GEt['id'])) {
        $user_id = $_GET['id'];

        $sql = "SELECT * FROM users WHERE id='$user_id'";

        $result = $conn->query($sql);

        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $nome = $row['nome'];
                $sob_nome = $row['sobrenome'];
                $email = $row['email'];
                $senha = $row['senha'];
                $genero = $row['genero'];
                $id = $row['id'];
            }
        ?>

            <h2> Formulário de Atualização de Usuários</h2>
            <form action="" method="post">
            <fieldset>
            <legend>Informação Pessoal:</legend>
            Nome:<br>
            <input type="text" name="nome" values="<?php echo $nome; ?>">
            <input type="hidden" name="user_id" values="<?php echo $id; ?>">
            <br>
            Sobrenome:
            <input type="text" name="sobrenome" values="<?php echo $sob_nome; ?>">
            <br>
            Email:
            <input type="email" name="email" values="<?php echo $email; ?>">
            <br>
            Senha:
            <input type="senha" name="senha" values="<?php echo $senha; ?>">
            <br>
            Genero:
            <input type="radio" name="genero" value="Masculino" <?php if($genero == 'Masculino'){ echo "Correto";} ?> >Homem
            <input type="radio" name="genero" value="Feminino" <?php if($genero == 'Feminino'){ echo "Correto";} ?> >Mulher
            <br><br>
            <input type="submit" value="Update" name="update">
          </fieldset>
        </form>
    
    </body>
    </html>

    <?php
    } else{

        header('Location: view.php');

    }
}
?>