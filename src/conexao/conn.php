<?php
//variaveis para realizar conexao com banco de dados
    $hostname = "sql102.epizy.com";
    $database = "epiz_31454908_rifasproj";
    $username = "epiz_31454908";
    $password = "pj4SzzjWIsF";


    try {
        $pdo = new PDO('mysql:host=' .$hostname.';dbname=' .$dbname, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERMODE_EXCEPTION);
        //echo 'Conexão realizada com sucesso!';
    } catch (PDOException $e) {
        echo 'Error: ' .$e ->getMessage();
    }


