<div class="titulo">Traits #01</div>
<!-- 
    Não se usa as Traits apartir de Herança (extends ou implements)
    Usa-se a Trait com a palavra 'use'
-->
<?php
trait validacao {
    public $a = "Valor a";
    public function validarString($str) {
        return isset($str) && $str !== '';
    }
}

trait validacaoMelhor {
    // no corpo da trait pode conter varios metodos e atributos
    public $b = "Valor b";
    // private $c = "Valor c (privado)";

    public function validarStringMelhor($str) {
        return isset($str) && trim($str); // trim serve para remover os espaços nas extremidades
    }
}

class Usuario {
    use validacao, validacaoMelhor;

    // public function imprimirValorC(){
    //     echo $this->c;
    // }
}

// var_dump(validacao->validacaoMelhor);

$usuario = new Usuario();
var_dump($usuario->validarString(" "));
echo '<br>';
var_dump($usuario->validarStringMelhor(" "));
echo '<br>';
echo $usuario->a, '<br>', $usuario->b;
echo '<br>';
// $usuario->imprimirValorC();