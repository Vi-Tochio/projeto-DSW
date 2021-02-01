<?php

include_once "BancoDados.php";

class Curiosidade{

    public static function cadastraCuriosidades($codigo){
        
        try{
            // Criar uma conexão
            $conexao = BancoDados::getInstance()->getConnection();

            // Criar a SQL para executar
            $stmt = $conexao->prepare("INSERT INTO curiosidades(codigo) VALUES (?)");

            // Executar a SQL
            $stmt->execute([$codigo]);
            
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

    public static function retornarCuriosidades() {
        $resultado = array();

        try {
            $conexao = BancoDados::getInstance()->getConnection();

            $stmt = $conexao->prepare("SELECT codigo FROM curiosidades");

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