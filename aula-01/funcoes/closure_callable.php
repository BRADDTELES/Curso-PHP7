<div class="titulo">Closure & Callable</div>

<?php

$soma1 = function ($a, $b){
    return $a + $b;
};

function soma2($a, $b) {
    return $a + $b;
}

echo $soma1(2, 3) . ' ';
echo (is_callable($soma1) ? "Sim" : "Não") . "<br>";

echo soma2(2, 3) . ' ';
echo (is_callable("soma2") ? "Sim" : "Não") . "<br>"; // funciona melhor se a soma2 estiver dentro de aspas, sem aspas tambem funciona

var_dump($soma1);

function executar1($a, $b, $operacao, Callable $funcao){
    $resultado = $funcao($a, $b);
    echo "$a $operacao $b = $resultado <br>";
}

echo '<br>';
executar1(2, 3, '+', $soma1);
executar1(2, 3, '+', 'soma2');

function executar2($a, $b, $operacao, Closure $funcao){
    $resultado = $funcao($a, $b);
    echo "$a $operacao $b = $resultado <br>";
}

echo '<br>';
executar2(100, 100, '+', $soma1);
// executar2(3000, 3000, '+', soma2);