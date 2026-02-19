<?php
    //Variaveis de conexão
    $host = '10.91.45.39';
    $db = 'db_padaria';
    $user = 'admin';
    $pass = '123456';

    try{
        //Configura a conexão com as informações do banco de dados
        $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
        // Configura o PDO para lançar os erros como excessões
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Conexão concluída com sucesso!";
    }catch(PDOException $err){
        die("Erro na conexão ".$err->getMessage());
    }


?>