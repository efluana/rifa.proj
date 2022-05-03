<?php
//variaveis para realizar conexao com banco de dados
    $hostname = "sql102.epizy.com";
    $database = "epiz_31454908_rifasproj";
    $username = "epiz_31454908";
    $password = "pj4SzzjWIsF";


    if($conecta = mysqli_connect($hostname, $username, $password, $database)){
        echo 'Conectando ao banco de dados '.$database.'.....';
    } else {
        echo 'Erro: '.mysqli_connect_error();
    }