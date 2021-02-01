<?php

include_once "BancoDados.php";

class CuriDanca{

    public static function cadastraCuriDanca($curiosidade){
        
        try{
            // Criar uma conexão
            $conexao = BancoDados::getInstance()->getConnection();

            // Criar a SQL para executar
            $stmt = $conexao->prepare("INSERT INTO curi_danca(curiosidade) VALUES (?)");

            // Executar a SQL
            $stmt->execute([$curiosidade]);
            
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

    public static function retornarCuriDanca() {
        $resultado = array();

        try {
            $conexao = BancoDados::getInstance()->getConnection();

            $stmt = $conexao->prepare("SELECT curiosidade FROM curi_danca");

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