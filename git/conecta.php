<?php

    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "uninove";

    $conexao = new MySQLi("$host", "$usuario", "$senha", "$banco");

    $conexao->set_charset("utf8");

    if ($conexao -> connect_error) {
        echo "Erro de conexão";
    }  else {
        echo "Conexão bem sucedida!";
    }
    
?>