<?php

include_once "BancoDados.php";

class Ministra{

    public static function cadastraMinistra($RE, $cpf, $nome, $data_ingresso){
        
        try{
            // Criar uma conexão
            $conexao = BancoDados::getInstance()->getConnection();

            // Criar a SQL para executar
            $stmt = $conexao->prepare("INSERT INTO ministra(RE, cpf, nome, data_ingresso) VALUES (?, ?, ?, ?)");

            // Executar a SQL
            $stmt->execute([$RE, $cpf, $nome, $data_ingresso]);
            
            // Checar resultado
            $linhas_alteradas = $stmt->rowCount();
        
        }  catch(Exception $e) {
            echo $e->getMessage();
            exit;
        }
        
        if($linhas_alteradas > 0) {
            return true;
        } else {
            return false;
        }

    }

    public static function retornarMinistra() {
        $resultado = array();

        try {
            $conexao = BancoDados::getInstance()->getConnection();

            $stmt = $conexao->prepare("SELECT RE, cpf, nome, data_ingresso FROM ministra ");

            $stmt->execute();

            $resultado = $stmt->fetchAll();
        } catch(Exception $e) {
            echo $e->getMessage();
            exit;
        }

        return $resultado;
    }
}
?>