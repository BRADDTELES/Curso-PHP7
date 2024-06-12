<div class="titulo">Desafio Impressão</div>

<!-- 
Enunciado:
- Imprima apenas os valores do array que contém o índice par
- Resolver com o for e foreach
- Valores esperados: AAA, CCC, EEE
-->
<?php
$array = [
    'AAA',
    'BBB',
    'CCC',
    'DDD',
    'EEE',
    'FFF',
];

echo "Array usando o For: ";

for ($i = 0; $i < count($array); $i++) {
    if ($i % 2 === 0) {
        echo "{$array[$i]} ";
    }
}

echo '<br>';

echo "Array usando o Foreach: ";
foreach ($array as $key => $value) {
    if ($key % 2 === 0) {
        echo "{$value} ";
    }
}

echo '<hr>';

echo "Resposta certa é:<br>";
for ($i = 0; $i < count($array); $i++) {
    if ($i % 2 === 1) continue;
        echo "{$array[$i]} ";
}

echo '<br>';

foreach ($array as $key => $value) {
    if ($key % 2 !== 0) continue;
        echo "{$value} ";
}