<div class="titulo">Argumentos Variáveis</div>

<?php
function soma($a, $b){
    return $a + $b;
}

echo soma(14, 15) . '<br>';
echo soma(6, 5, 4) . '<br>';

function somaCompleta(...$numeros){
    $soma = 0;
    foreach($numeros as $numero){
        $soma += $numero;
    }
    return $soma;
}

echo somaCompleta(1, 2, 3, 4, 5) . '<br>';

$array = [6, 7, 8];
echo somaCompleta(...$array) . '<br>';

function membros($titular, ...$dependentes){
    echo "Titular: " . $titular . "<br>";
    foreach($dependentes as $dependente){
        echo "Dependente: ". $dependente. "<br>";
    }
}

membros('João Silva', 'Maria', 'José', 'Carlos');
echo '<br>';
membros('Mariana Pereira');