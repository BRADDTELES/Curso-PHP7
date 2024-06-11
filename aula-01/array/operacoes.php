<div class="titulo">Operações</div>

<?php
$dados1 = [
    "nome" => "Jose",
    "idade" => 28
];

$dados2 = [
    "naturalidade" => "Fortaleza"
];

$dados2["endereço"] = "Rua A";

$dadosCompletos = $dados1 + $dados2;
print_r($dadosCompletos);

echo '<br>' . is_array($dadosCompletos); // Verificar se é Array ou não
echo '<br>' . count($dadosCompletos); // Contar

echo '<br>';
$indice = array_rand($dadosCompletos);
echo "$indice = $dadosCompletos[$indice]";
echo '<br>';
echo "{$dadosCompletos['idade']}"; // funciona também sem as chaves e aspas duplas
echo " ${dadosCompletos['idade']}";

unset($dadosCompletos['nome']); // Remover um elemento do array
echo '<br>';
print_r($dadosCompletos);
unset($dadosCompletos); // Esvaziar o array
echo '<br>';
var_dump($dadosCompletos);

$impares = [1, 3, 5, 7, 9];
$pares = [0, 2, 4, 6, 8];

$decimais = $pares + $impares; // não funciona tão bem com numeros
echo '<br>';
print_r($decimais);

$decimais = array_merge($pares, $impares); // melhor forma de mergir
echo '<br>';
print_r($decimais);

sort($decimais); // Ordenação
echo "<br>";
print_r($decimais);
