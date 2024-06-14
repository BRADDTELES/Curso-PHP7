<div class="titulo">Desafio Classe Data</div>

<?php
class Data{
    public $dia = 1;
    public $mes = 1;
    public $ano = 1970;

    public function apresentar(){
        return $this->dia . $this->mes . $this->ano;
    }
}

$data1 = new Data();
echo $data1->dia . '/';
echo $data1->mes . '/';
echo $data1->ano . '<br>';