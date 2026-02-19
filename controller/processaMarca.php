<?php
    require_once('../config/conexao.php');

    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $marca = filter_var($_POST['Marca'], FILTER_SANITIZE_SPECIAL_CHARS) ?? '';
        if(!empty($marca)){
            $sql = "INSERT INTO `Marca`(`nome`) VALUES (:Marca)";
            $stmt = $pdo->prepare($sql);

            $stmt->execute([':Marca'=>$marca]);

            echo "Dados cadastrados com sucesso!";
        }else{
            echo "O nome da marca não pode ser vazia";
        }
    }


?>