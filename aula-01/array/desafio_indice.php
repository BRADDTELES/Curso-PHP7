<div class="titulo">Desafio Índice</div>

<?php
$lista = array(
    1,
    4 => 2,
    3 => 3,
    'a' => 4,
    5,
    '9' => 6,
    '06' => 7,
    0 => 8
);

// Array ( [0] => 1 [4] => 2 [3] => 3 [a] => 4 [5] => 5 [9] => 6 [06] => 7 [0] => 8)
// Array ( [0] => 8 [4] => 2 [3] => 3 [a] => 4 [5] => 5 [9] => 6 [06] => 7) $lista(8, NULL, NULL, 3, 2, 'a', 5, 7, NULL, 6)
print_r($lista);