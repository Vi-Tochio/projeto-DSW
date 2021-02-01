<?php

include_once "BancoDados.php";

class Filmes{

    public static function cadastraFilmes($ano, $filme){
        
        try{
            // Criar uma conexão
            $conexao = BancoDados::getInstance()->getConnection();

            // Criar a SQL para executar
            $stmt = $conexao->prepare("INSERT INTO filmes(ano, filme) VALUES (?, ?)");

            // Executar a SQL
            $stmt->execute([$ano, $filme]);
            
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

    public static function retornarFilmes() {
        $resultado = array();

        try {
            $conexao = BancoDados::getInstance()->getConnection();

            $stmt = $conexao->prepare("SELECT ano, filme FROM filmes");

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