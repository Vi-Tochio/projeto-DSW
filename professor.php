<?php

include_once "BancoDados.php";

class Professor{

    public static function cadastraProfessores($nome, $CPF, $RE, $rua, $bairro, $numero, $CEP, $email, $telefone, $formacao, $motivo_ensinar){
        
        try{
            // Criar uma conexão
            $conexao = BancoDados::getInstance()->getConnection();

            // Criar a SQL para executar
            $stmt = $conexao->prepare("INSERT INTO professor(nome, CPF, RE, rua, bairro, numero, CEP, email, telefone, formacao, motivo_ensinar) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

            // Executar a SQL
            $stmt->execute([$nome, $CPF, $RE, $rua, $bairro, $numero, $CEP, $email, $telefone,  $formacao, $motivo_ensinar]);
            
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

    public static function retornarProfessores() {
        $resultado = array();

        try {
            $conexao = BancoDados::getInstance()->getConnection();

            $stmt = $conexao->prepare("SELECT nome, CPF, RE, rua, bairro, numero, CEP, email, telefone, formacao, motivo_ensinar FROM professor");

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