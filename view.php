<?php
    include "config.php";

    $sql = "SELECT * FROM users";

    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title> Página de Visualização </title>
    <link rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>users</h2>
    <table class="table">
        <head>
            <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Email</th>
            <th>Gênero</th>
            <th>Ação</th>
        </tr>
        </thrend>
        <tbody>
            <?php   
                if($result->num_rows>0) {
                    while($row = $result->fetch_assoc()) {
                
            ?>

                        <tr>
                        <td><?php echo $row['id']; ?> </td>
                        <td><?php echo $row['nome']; ?> </td>
                        <td><?php echo $row['sobrenome']; ?> </td>
                        <td><?php echo $row['email']; ?> </td>
                        <td><?php echo $row['genero']; ?> </td>
                        <td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">
                        Editar</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">
                        Deletar</a></td>
                            </tr>
                            
                        <?php   }
                }
                ?>

                </tbody>
            </table>
            </div>
        
    </body>
    </html>


                    

