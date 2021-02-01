<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8"/>
        <title>Estudio Dança LEV</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    </head>

    <body>

        <?php

        include "aluno.php";
        if (isset($_POST["nome"]) && isset($_POST["CPF"]) && isset($_POST["rua"]) && isset($_POST["bairro"]) && isset($_POST["numero"]) && isset($_POST["CEP"]) && isset($_POST["email"]) && isset($_POST["telefone"]) && isset($_POST["motivo_aprender"])) {
            $nome = $_POST["nome"];
            $CPF = $_POST["CPF"];
            $rua = $_POST["rua"];
            $bairro = $_POST["bairro"];
            $numero = $_POST["numero"];
            $CEP = $_POST["CEP"];
            $email = $_POST["email"];
            $telefone = $_POST["telefone"];
            $motivo_aprender = $_POST["motivo_aprender"];
    
            $resultado = aluno::cadastraAlunos($nome, $CPF, $rua, $bairro, $numero, $CEP, $email, $telefone, $motivo_aprender);
            if ($resultado) {
                echo "<p>Dados do aluno enviado com sucesso!</p>";
            } else {
                echo "<p>Erro no envio de dados!</p>";
            }
        }

        include "professor.php";
        if (isset($_POST["nome"]) && isset($_POST["CPF"]) && isset($_POST["RE"]) && isset($_POST["rua"]) && isset($_POST["bairro"]) && isset($_POST["numero"]) && isset($_POST["CEP"]) && isset($_POST["email"]) && isset($_POST["telefone"]) && isset($_POST["formacao"]) && isset($_POST["motivo_ensinar"])) {
            $nome = $_POST["nome"];
            $CPF = $_POST["CPF"];
            $RE = $_POST["RE"];
            $rua = $_POST["rua"];
            $bairro = $_POST["bairro"];
            $numero = $_POST["numero"];
            $CEP = $_POST["CEP"];
            $email = $_POST["email"];
            $telefone = $_POST["telefone"];
            $formacao = $_POST["formacao"];
            $motivo_ensinar = $_POST["motivo_ensinar"];
    
            $resultado = professor::cadastraProfessores($nome, $CPF, $RE, $rua, $bairro, $numero, $CEP, $email, $telefone, $formacao, $motivo_ensinar);
            if ($resultado) {
                echo "<p>Dados do professor enviado com sucesso!</p>";
            } else {
                echo "<p>Erro no envio de dados!</p>";
            }
        }
    
        ?>

        <a class="btn btn-primary" href="cadAluno.html" role="button" id="cadEs">Cadastro Alunos</a>
        <a class="btn btn-primary" href="cadProf.html" role="button" id="cadDi">Cadastro Professores</a>

        <div id="tit">
            <h1 id="let">Lost & Found Studio Dance </h1>
            <br>
            <a class="btn btn-primary" href="pagina2.html" role="button" id="bott">Cursos</a>
            <a class="btn btn-primary" href="pagina3.html" role="button" id="bott">Professores</a>
            <a class="btn btn-primary" href="pagina4.html" role="button" id="bott">Sobre a gente</a>
            <a class="btn btn-primary" href="pagina5.html" role="button" id="bott">Curiosidade</a>
        </div>

        <div id="fotinha">

        </div>

    </body>

</html>