<?php
include('pessoa.php');

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