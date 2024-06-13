<div class="titulo">Argumentos Padrão</div>

<?php
function saudacao($nome = "Senhor(a)", $sobrenome = "Cliente"){
    return "Bem vindo(a), $nome $sobrenome!<br>";
}

echo saudacao();
echo saudacao(NULL);
echo saudacao(null, NULL);
echo saudacao("Mestre", "Supremo");

// Parametros Padrão e Obrigatorio
function anotarPedido($comida, $bebida = "Água"){
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}

anotarPedido("Hamburguer"); // Hamburgues(Obrigatorio) e Água(Padrão)
anotarPedido("Pizza", "Refrigerante");

function anotarPedido2($bebida = "Água", $comida){
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}

// anotarPedido2("Hamburguer"); // Não funciona
anotarPedido2('Refrigerante2', 'Pizza2');
anotarPedido2(NULL, 'Pizza3');