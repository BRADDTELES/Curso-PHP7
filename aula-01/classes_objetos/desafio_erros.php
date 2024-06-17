<div class="titulo">Desafio Erros</div>

<?php
interface Template {
    function metodo1();
    public function metodo2($parametro);
}

abstract class ClasseAbstrata implements Template{ //1º erro: extends
    function metodo3(){
        return "Estou funcionando 3";
    }
    abstract public function metodo1(); // 4º erro: implementar o metod 1 vinda da Interface
    public function metodo2($parametro){ // 4º erro: implementar o metod 1 vinda da Interface

    }
}

class Classe extends ClasseAbstrata { // 2º erro: implements
    function __construct($parametro){
        return "Este é o construtor com o parametro $parametro <br>";
    }

    // public function metodo3(){
    //     return "Estou funcionando metodo 3 extendido<br>";
    //     parent::metodo3();
    // }
    public function metodo1(){ // 3º erro: implementar o metod 1 vinda da Interface
        return "Estou funcionando metodo 1<br>";
        parent::metodo1();
    }
    public function metodo2($parametro){ // 3º erro: implementar o metod 2 vinda da Interface
        return "Estou funcionando metodo 2, com o parametro $parametro <br>";
        parent::metodo2($parametro);
    }
}

$exemplo = new Classe("parametro1"); // 5º erro: usar o 'new' com o parametro entre aspas
echo $exemplo->__construct("parametro1");
echo $exemplo->metodo3(), "<br>"; // 6º erro: usar a setinha -> e não o dois pontos
echo $exemplo->metodo1();
echo $exemplo->metodo2("parametro2");