<?php
// Integrantes do grupo: Emily, Lucas M. e Vitória
//Professor como o nosso site é stático, nos pensamos que não precisamos alterar e nem remover os dados
//porque a pessoa vai enviar os dados dela para ser ou não aprovado na escola de dança
//e isso é tanto para os alunos e para os professores

//Curso
include_once "curso.php";
curso::cadastraCurso(800, "02:00:00", "Dança do Ventre", 6, "Passos expecificos da dança do ventre.");

$curso = curso::retornarCurso();
for($y=0; $y<count($curso);$y++){
    echo "<p>".$curso[$y]["preco"];
    echo "<p>".$curso[$y]["num_horas_aulas"];
    echo "<p>".$curso[$y]["nome"];
    echo "<p>".$curso[$y]["numero_aula"];
    echo "<p>".$curso[$y]["conteudo"];
}



//Aluno
include_once "aluno.php";
aluno::cadastraAlunos("Maria", "rua 2", 854783964520, "bairro 2", 136, "1347811525", "maria@.com", 37258910, "Meu sonho é me tornar profissional em dança!!");

$aluno=aluno::retornarAlunos();
for($z=0; $z<count($aluno);$z++){
    echo "<p>".$aluno[$z]["nome"]."</p>";
    echo "<p>".$aluno[$z]["rua"]."</p>";
    echo "<p>".$aluno[$z]["CPF"]."</p>";
    echo "<p>".$aluno[$z]["bairro"]."</p>";
    echo "<p>".$aluno[$z]["numero"]."</p>";
    echo "<p>".$aluno[$z]["CEP"]."</p>";
    echo "<p>".$aluno[$z]["email"]."</p>";
    echo "<p>".$aluno[$z]["telefone"]."</p>";
    echo "<p>".$aluno[$z]["motivo_aprender"]."</p>";
}


//Professor
include_once "professor.php";
professor::cadastraProfessores("Dayane", "Rua 333", 152338520145, "Bairro 333", 785, "1345336463", "dayane@.com", 33528848 , 15488436, "professora jazz", "Adoro ensinar as pessoas!");

$professores=professor::retornarProfessores();
for($x=0; $x<count($professores);$x++){
    echo "<p>".$professores[$x]["nome"]."</p>";
    echo "<p>".$professores[$x]["rua"]."</p>";
    echo "<p>".$professores[$x]["CPF"]."</p>";
    echo "<p>".$professores[$x]["bairro"]."</p>";
    echo "<p>".$professores[$x]["numero"]."</p>";
    echo "<p>".$professores[$x]["CEP"]."</p>";
    echo "<p>".$professores[$x]["email"]."</p>";
    echo "<p>".$professores[$x]["telefone"]."</p>";
    echo "<p>".$professores[$x]["RE"]."</p>";
    echo "<p>".$professores[$x]["formacao"]."</p>";
    echo "<p>".$professores[$x]["motivo_ensinar"]."</p>";
}

//Filme
include_once "filmes.php";
filmes::cadastraFilmes(2020, "Dançarina Imperfeita");

$filmes=filmes::retornarFilmes();
for($o=0; $o<count($filmes); $o++){
    echo "<p>".$filmes[$o]["ano"]."</p>";
    echo "<p>".$filmes[$o]["filme"]."</p>";
}
//$filmes = filmes::deletarFilmes("codi_curi");


//Livro
include_once "livros.php";
livros::cadastraLivros(2017, "Dança dança");

$livros=livros::retornarLivros();
for($s=0; $s<count($livros);$s++){
    echo "<p>".$livros[$s]["ano"]."</p>";
    echo "<p>".$livros[$s]["livro"]."</p>";
}
//$livros = livros::deletarLivros("codi_curi");

//Curi Dança
include_once "curiDanca.php";
curiDanca::cadastraCuriDanca("No começo, a Valsa era chamada de dança proibida!!");

$curi_danca = curiDanca::retornarCuriDanca();
for ($m=0; $m<count($curi_danca);$m++){
    echo "<p>".$curi_danca[$m]["curiosidade"]."<p>";
}
//$curi_danca = curiDanca::deletarcuriDanca("codi_curi","curiosidade");

//Ministra
include_once "ministra.php";
ministra::cadastraMinistra(15487236, 152018520145, "Ballet", "2014-11-18");

$ministra=ministra::retornarMinistra();
for($a=0; $a<count($ministra);$a++){
    echo "<p>".$ministra[$a]["RE"]."</p>";
    echo "<p>".$ministra[$a]["cpf"]."</p>";
    echo "<p>".$ministra[$a]["nome"]."</p>";
    echo "<p>".$ministra[$a]["data_ingresso"]."</p>";
}
//$ministra = ministra::deletarMinistra("RE, cpf, nome");


//Turno Aulas
include_once "turno_aulas.php";
turnoAulas::cadastraTurnoAulas("Ballet", "Tarde");

$TurnoAulas=TurnoAulas::retornarTurnoAulas();
for($e=0; $e<count($TurnoAulas);$e++){
    echo "<p>".$TurnoAulas[$e]["curso"]."</p>";
    echo "<p>".$TurnoAulas[$e]["turno"]."</p>";
}
//$TurnoAulas = TurnoAulas::deletarTurnoAulas("curso, turno");


//Cursa
include_once "cursa.php";
cursa::cadastraCursa("120524863025", "Ballet", "2020/03/05");

$cursas = cursa::retornarCursa();
for($h=0; $h<count($cursas);$h++){
    echo "<p>".$cursas[$h]["CPF_aluno"];
    echo "<p>".$cursas[$h]["nome_cur"];
    echo "<p>".$cursas[$h]["data_ingresso"];
}
//$cursas = cursa::deletarCursa("CPF_aluno", "nome_cur");


?>