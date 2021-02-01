<?php
include_once "BancoDados.php";

class Cursa{

    public static function cadastraCursa($CPF_aluno, $nome_cur, $data_ingresso){
        
        try{
            // Criar uma conexão
            $conexao = BancoDados::getInstance()->getConnection();

            // Criar a SQL para executar
            $stmt = $conexao->prepare("INSERT INTO cursa(CPF_aluno, nome_cur, data_ingresso) VALUES (?, ?, ?)");

            // Executar a SQL
            $stmt->execute([$CPF_aluno, $nome_cur, $data_ingresso]);
            
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

    public static function retornarCursa() {
        $resultado = array();

        try {
            $conexao = BancoDados::getInstance()->getConnection();

            $stmt = $conexao->prepare("SELECT CPF_aluno, nome_cur, data_ingresso FROM cursa");

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