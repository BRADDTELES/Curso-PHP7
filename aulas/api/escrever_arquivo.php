<div class="titulo">Escrever Arquivo</div>

<?php
$arquivo = fopen('teste.txt', 'w'); // o 'fopen()' irá criar um arquivo na pasta raiz do projeto 
fwrite($arquivo, "Valor inicial\n"); // precisou usar o \n para quebrar linha, obrigatorio usar aspas duplas
$str = "Segunda linha\n";
fwrite($arquivo, $str);
fclose($arquivo);

$arquivo = fopen('teste.txt', 'w');
fwrite($arquivo, "Novo conteúdo");
fclose($arquivo);

$arquivo = fopen('teste.txt', 'a');
fwrite($arquivo, " com novos valores\n");
fwrite($arquivo, "Adicionados em um segundo momento");
fclose($arquivo);

ini_set('display_errors', 1);
$arquivo = fopen('teste.txt', 'x');