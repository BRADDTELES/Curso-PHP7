<div class="titulo">Inserir Registro #01</div>

<?php

require_once "conexao.php";

$sql = "INSERT INTO cadastro
(nome, nascimento, email, site, filhos, salario)
VALUES 
        (
            'Marieta',
            '1989-10-29',
            'marieta123@email.com.br',
            'http://marieta123.sites.com.br',
            2,
            13000.87
        ),
        (
            'João Pereira',
            '1979-02-19',
            'joaopereira@email.com.br',
            'http://joaopereira.sites.com.br',
            2,
            13000.87
        ),
        (
            'Maria Silva',
            '2001-11-11',
            'maria_silva@gmail.com',
            'http://mariasilvao.co',
            0,
            7800.12
     ),
     (
            'Pedro Cardoso',
            '1993-01-23',
            'pcardoso@gmail.com',
            null,
            1,
            9143.87
     ),
     (
            'Andre Miranda',
            '1999-09-01',
            'miranda_andre@yahoo.com',
            'http://mirandaandre.io',
            0,
            19980.12
     )";
$conexao = novaConexao();
$resultado = $conexao->query($sql);

if ($resultado) {
    echo "Dado inserido com sucesso!";
} else {
    echo "Erro: " . $conexao->error;
}

$conexao->close();