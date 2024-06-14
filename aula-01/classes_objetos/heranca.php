<div class="titulo">Herança</div>

<?php
class Pessoa{
    public $nome;
    public $idade;

    function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
        echo "Pessoa crada!<br>";
    }

    function __destruct(){
        echo "Pessoa diz: Tchau!!<br>";
    }

    public function apresentar(){
        echo "{$this->nome}, {$this->idade} anos<br>";
    }
}

class Usuario extends Pessoa{
    public $login;

    function __construct($nome, $idade, $login){
        parent::__construct($nome, $idade);
        // $this->nome = $nome; // Pode ser utilizado, melhor forma
        // $this->idade = $idade; // Pode ser utilizado, melhor forma
        $this->login = $login;
        echo "Usuário criado!<br>";
    }

    function __destruct(){
        echo "Usuário diz: Tchau!!<br>";
        parent::__destruct();
    }

    public function apresentar(){
        // echo "@{$this->login}: {$this->nome}, {$this->idade} anos<br>"; // Pode utilizar dessa forma
        echo "@{$this->login}: ";
        parent::apresentar(); // Pode utilizar dessa forma
    }
}

$usuario = new Usuario("Gustavo Mendonça", 21, "gust_mend");
$usuario->apresentar();
unset($usuario);