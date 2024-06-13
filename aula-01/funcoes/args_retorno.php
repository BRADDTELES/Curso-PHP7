<div class="titulo">Argumentos & Retorno</div>

<?php
function obterMensagem() {
    return "Seja bem vindo(a)!";
}

obterMensagem(); // Não aparece nada na Tela
echo obterMensagem() . '<br>';
$mensagem = obterMensagem();
echo $mensagem , '<br>';
var_dump(obterMensagem());

function obterMensagemComParamentro($nome){
    return "Bem vindo(a), {$nome}!";
}

echo '<br>' . obterMensagemComParamentro('Wagner');
echo '<br>' . obterMensagemComParamentro('Tiago');


function somaComMultiParamentros($a, $b) {
    // $somaComMultiParametros = $a + $b; // Também pode
    // return $somaComMultiParametros; // ser Utilizado
    return $a + $b;
}

echo '<br>' . somaComMultiParamentros(45, 78);
$x = 4;
$y = 5;
echo '<br>' . somaComMultiParamentros($x, $y); // Também pode

function trocarValor($a, $novoValor){
    $a = $novoValor;
}

$variavel = 1;
trocarValor($variavel, 3);
echo '<br>' . $variavel;

function trocarValorPorReferencia(&$a, $novoValor){
    $a = $novoValor;
}

trocarValorPorReferencia($variavel, 5000);
echo '<br>' . $variavel;