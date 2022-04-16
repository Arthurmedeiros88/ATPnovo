<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "atpdevops";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if($conn->connect_error) {
        die("Falha de Conexão" . $conn->connect_error);
    }
?>  