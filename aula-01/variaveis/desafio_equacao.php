<div class="titulo">Desafio Equação</div>

<?php
echo 'Minha Resposta' . '<br>';
$numA = (6 * (3 + 2)) ** 2;
$numB = 3 * 2;
$calc1 = $numA / $numB;
echo $calc1;

echo '<br>';
$numA = ((1 - 5) * (2 - 7)) / 2;
$calc2 = $numA ** 2;
echo $calc2;

echo '<br>';
$calc3 = $calc1 - $calc2;
$calc4 = $calc3 ** 3;
echo $calc4;
echo '<br>';
$calc5 = 10 ** 3;
echo $calc5;
echo '<br>';
$calc6 = $calc4 / $calc5;
echo $calc6;

echo '<br>';
echo 'Resposta do Professor' . '<br>';
$numA = (6 * (3 + 2)) ** 2;
$denA = 3 * 2;

$numB = (1 - 5) * (2 - 7);
$denB = 2;

$superiorA = $numA / $denA;
$superiorB = ($numB / $denB) ** 2;

$superior = ($superiorA - $superiorB) ** 3;
$inferior = 10 ** 3;

$final = $superior / $inferior;
echo 'O resultado final é ' . $final . '.';
