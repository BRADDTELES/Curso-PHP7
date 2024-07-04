<div class="titulo">Include em Função</div>

<?php
echo "Carregando: include_function<br>";

function carregarArquivo() {
    include('include_arquivo.php');
    echo "'{$variavel}'" . "<br>";
    echo soma(2, 5). "!<br>";
}

echo "Novamente no arquivo include_function<br>";
// echo soma(1, 8) . '!<br>';
carregarArquivo();
echo soma(1, 8) . '!<br>';
echo "Variável: '{$variavel}'.";
var_dump($variavel);
echo '<br>' . soma(3, 8) . "!";