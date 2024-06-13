<div class="titulo">Recursividade</div>
<!-- 
    Factorial de forma Recursiva
    >>> DIFICIL DE COMPREENDER!!!
-->
<?php
function somaUmAte ($numero){
    $soma = 0;
    for( ; $numero >= 1; $numero--){
        $soma += $numero;
    }
    return $soma;
}

echo somaUmAte(5) . '<br>';

function somaUmAteDeOutraForma($numero){
    $soma = 0;
    for($i = 1; $i <= $numero; $i++){
        $soma += $i;
    }
    return $soma;
}

echo somaUmAteDeOutraForma(150) . '<br>';

function somaRecursivaUmAte($numero){
    // Condição de Parada!!!!
    if($numero === 1){
        return 1;
    } else {
        return $numero + somaRecursivaUmAte($numero - 1);
    }
}

echo somaRecursivaUmAte(150) . '<br>';

function somaRecursivaEconomica($numero){
    return $numero === 1 ? 1 : $numero + somaRecursivaEconomica($numero - 1);
}

echo somaRecursivaEconomica(150) . '<br>';