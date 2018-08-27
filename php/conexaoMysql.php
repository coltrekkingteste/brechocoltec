<?php
    //Dados do mysql
    $servername = "sql9.freemysqlhosting.net";
    $username = "sql9253872";
    $password = "f4xT8bZPBX";
    $dbname = "sql9253872";

    //Criar conexao com DB
    $conn = new mysqli($servername, $username, $password, $dbname);

    //Checar se a conexao falhou
    if ($conn->connect_error) {
        die("Conexao com banco de dados falhou: " . $conn->connect_error);
    }
?>