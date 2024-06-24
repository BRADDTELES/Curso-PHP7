<?php

function novaConexao ($banco = 'curso_php') {
    $servidor = '127.0.0.1:3306'; // pode também usar a Porta 3307 ou localhost no lugar do 127.0.0.1
    $usuario = 'root';
    $senha = ''; // informe a senha caso tenha

    $conexao = new mysqli($servidor, $usuario, $senha, $banco);

    if($conexao->connect_error) {
        die('Erro: ' . $conexao->connect_error);
        // echo 'Erro: '. $conexao->connect_error;
        // exit();
    }

    return $conexao;
}