<div class="titulo">Desafio Palindromo</div>

<?php
function palindromoTeste($string){ 
    if (strrev($string) == $string){ 
        return "Palindromo"; 
    }
    else{
        return "Não é Palindromo";
    }
} 
echo palindromoTeste("Arara") . "<br>";

function palindromo($palavra){
    $ultimoIndice = strlen($palavra) - 1;
    for($i = 0; $i <= $ultimoIndice; $i++){
        if($palavra[$i] !== $palavra[$ultimoIndice - $i]){
            return "Não";
        }
    }
    return "Sim";
}

echo palindromo("arara") . " ";
echo palindromo("ana") , " ";
echo palindromo("abccba") . " ";
echo palindromo("bola") , " ";

echo '<br>';

function palidromoSimples($palavra){
    return $palavra === strrev($palavra) ? "Sim" : "Não";
}

echo palidromoSimples("arara") . " ";
echo palidromoSimples("ana") , " ";
echo palidromoSimples("abccba") . " ";
echo palidromoSimples("bola") , " ";