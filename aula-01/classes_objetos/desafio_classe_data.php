<div class="titulo">Desafio Classe Data</div>

<?php
class MinhaData{
    public $dia = 1;
    public $mes = 1;
    public $ano = 1970;

    public function apresentar(){
        return $this->dia . $this->mes . $this->ano;
    }
}

$data1 = new MinhaData();
echo $data1->dia . '/';
echo $data1->mes . '/';
echo $data1->ano . '<br>';

echo "Resposta do Professor <br>";

class Data{
    public $dia = 1;
    public $mes = 1;
    public $ano = 1970;

    public function apresentar(){
        return "{$this->dia}/{$this->mes}/{$this->ano}";
    }
}

$aniversario = new Data();
$aniversario->dia = 15;
$aniversario->mes = 8;
$aniversario->ano = 2014;

$casamento = new Data();
$casamento->dia = 1;
$casamento->mes = 8;
$casamento->ano = 2009;

echo $aniversario->apresentar(),"<br>";
echo $casamento->apresentar();