<?php
 
    $hostname = "localhost"; //Nome do servidor que se encontra nosso banco de dados
    $dbname = "rifa"; //Nome do nosso banco de dados
    $username = "root"; //Nome do usuário para acesso ao banco de daddos
    $password = ""; //Senha de acesso ao nosso banco de daddos
    
    try {
        $pdo = new PDO('mysql:host='.$hostname.';dbname='.$dbname, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo 'Conexão com banco de dados, realizado com sucesso!!!';
    }catch(PDOException $e) {
        echo 'Erro: '.$e->getMessage();
    }