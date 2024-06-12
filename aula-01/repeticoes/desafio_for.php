<div class="titulo">Desafio For</div>

<!-- 
Usar o for...
#
##
###
####
#####
1) Pode usar incremento $i++
2) Não pode usar incremento $i++
-->

<?php
$matrix = [
    ["#", 
    "##", 
    "###"], 
    ["####", 
    "#####"] 
];
for ($i=0; $i < count($matrix); $i++) { 
    for ($j=0; $j < count($matrix[$i]); )
    {
        echo "{$matrix[$i][$j]} <br>";
        $j = $j + 1;
    }
}

echo '<hr>';

$impressao = '';
for($cont = 1; $cont <= 5; $cont++){
    $impressao .= '#';
    echo "$impressao <br>"; 
}

echo '<hr>';

for(
    $impressao2 = '#'; 
    $impressao2 !== '######'; $impressao2 .= '#'
    ){
    echo "$impressao2 <br>";
}