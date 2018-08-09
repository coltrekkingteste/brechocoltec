<?php
    //Dados do mysql
    $servername = "sql9.freemysqlhosting.net";
    $username = "sql9251241";
    $password = "Hs4Lfjneef";
    $dbname = "sql9251241";

    //Criar conexao com DB
    $conn = new mysqli($servername, $username, $password, $dbname);

    //Checar se a conexao falhou
    if ($conn->connect_error) {
        die("Conexao com banco de dados falhou: " . $conn->connect_error);
    }
?>