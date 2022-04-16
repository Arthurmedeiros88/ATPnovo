<?php
    include "config.php";

    if(isset($_GET['id'])) {
        $user_id = $_GET['id'];
    
    $sql = "DELETE FROM users WHERE id='$user_id'";

    $result = $conn->query($sql);

    if ($result == TRUE) {
        echo "Dados apagados com sucesso.";
    }else{
        echo "Erro:" . $sql . "<br>" . $conn->error;
    }


}
?>