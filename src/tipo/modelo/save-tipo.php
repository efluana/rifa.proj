<?php

    //obter conexao com banco de daod
    include('../../conexao/conn.php');

    //obter dados enviados do formulario via $_REQUEST
    $requestData = $_REQUEST

    //verificação de campo obrigatorio do formulario
    if(empty($requestData['NOME'])){
        //caso a variavel venha vazia eu gero um retorno do mesmo
        $dados = array(
            "tipo" => 'error',
            "mensagem" => 'exite(m) campo(s) obrigatório(s) não preenchido(s).'
        );
    } else {
        //caso não exista campo em vazio, vamos gerar a requisição
        $ID = isset($requestData['ID']) ? $requestData ['ID'] : '';
        $operacao = isset ($requestData['operacao']) ? $requestData['operacao'] : '';
    
        //verifica se é p cadastrar um novo registro
        if($operacao == 'insert'){
            //prepara o comando INSERT para ser executado
            try{
                $stmt = $pdo->prepare('INSERT INTO TIPO (NOME) VALUES (:a)');
                $stmt->excecute(array(
                    ':a' => utf8_decode($requestData['NOME'])
                ));
                $dados = array ()
                "tipo" => 'success',
                "mensagem" => 'registro salvo com sucesso.'
            );
            }
        }
    }