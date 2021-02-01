<?php
include_once "BancoDados.php";

class Curso{

    public static function cadastraCurso($preco, $num_horas_aulas, $nome, $numero_aula, $conteudo){
        
        try{
            // Criar uma conexão
            $conexao = BancoDados::getInstance()->getConnection();

            // Criar a SQL para executar
            $stmt = $conexao->prepare("INSERT INTO curso(preco, num_horas_aulas, nome, numero_aula, conteudo) VALUES (?, ?, ?, ?, ?)");

            // Executar a SQL
            $stmt->execute([$preco, $num_horas_aulas, $nome, $numero_aula, $conteudo]);
            
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

    public static function retornarCurso() {
        $resultado = array();

        try {
            $conexao = BancoDados::getInstance()->getConnection();

            $stmt = $conexao->prepare("SELECT preco, num_horas_aulas, nome, numero_aula, conteudo FROM curso");

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