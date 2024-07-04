<div class="titulo">Desafio String</div>

<?php

// Enunciado:
/*
Avaliando os métodos dda documentação da string,
qual o métodos que a posição do texto 'abc'
na string '!AbcaBcabc' retorne 1
*/

echo strpos('!AbcaBcabc', 'abc') . '<br>';
echo stripos('!AbcaBcabc', 'abc') . '<br>';

echo strpos(strtolower('!AbcaBcabc'), strtolower('ABC')) . '<br>';
// Minha ressposta
$mystring = '!AbcaBcabc';
$mystringlower = strtolower($mystring);
$findme   = 'abc';
$pos = strpos($mystringlower, $findme);
if ($pos === false) {
    echo "A string '$findme' não foi encontrada na string '$mystring'";
} else {
    echo "A string '$findme' foi encontrada na string '$mystring'";
    echo " e existe na posição $pos";
}
?>