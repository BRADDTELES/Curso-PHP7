<div class="titulo">Métodos Mágicos</div>

<?php
class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome, $idade){
        echo "Construtor criado!<br>";
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct(){
        return "<br>E morreu!";
    }

    public function __toString(){
        return "{$this->nome} tem {$this->idade} anos.";
    }

    public function apresentar(){
        return $this . "<br>";
    }

    public function __get($atributo){
        echo "Lendo um atributo não declarado: {$atributo}<br>";
    }

    public function __set($atributo, $valor){
        echo "Alterando atributo não declarado: {$atributo}/{$valor}<br>";
    }

    public function __call($metodo, $parametros){
        echo "Tentando executar método '{$metodo}'";
        echo " com os parametros: ";
        print_r($parametros);
    }
}

$pessoa = new Pessoa("Ricardo", 40); // __construct
echo $pessoa->apresentar(); // chamando o __toString
echo $pessoa . "<br>"; // chamando o __toString
$pessoa->nome = "Reinaldo";
echo $pessoa->apresentar(); // chama o método diretamente sem __call

$pessoa->nomeCompleto = "Muito Legal!!!"; // chamando o __set
$pessoa->nomeCompleto; // chamando o __get
echo $pessoa->nome; // acessa o atributo diretamente sem __get

$pessoa->exec(1, 'teste', true, [1, 2, 3]); // chama o __call pq o método não existe no objeto

// $pessoa = null; // PROBLEMA! não funcionou

// só funciona usando o return dentro do __destruct e chamando o echo abaixo
echo $pessoa->__destruct(); // __destruct