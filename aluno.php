<?php

include_once "BancoDados.php";

class Aluno{

    public static function cadastraAlunos($nome, $CPF, $rua, $bairro, $numero, $CEP, $email, $telefone, $motivo_aprender){
        
        try{
            // Criar uma conexão
            $conexao = BancoDados::getInstance()->getConnection();

            // Criar a SQL para executar
            $stmt = $conexao->prepare("INSERT INTO aluno(nome, CPF, rua, bairro, numero, CEP, email, telefone, motivo_aprender) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

            // Executar a SQL
            $stmt->execute([$nome, $CPF, $rua, $bairro, $numero, $CEP, $email, $telefone, $motivo_aprender]);
            
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

    public static function retornarAlunos() {
        $resultado = array();

        try {
            $conexao = BancoDados::getInstance()->getConnection();

            $stmt = $conexao->prepare("SELECT nome, CPF, rua, bairro, numero, CEP, email, telefone, motivo_aprender FROM aluno");

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