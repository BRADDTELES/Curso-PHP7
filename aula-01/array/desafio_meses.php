<div class="titulo">Desafio Meses</div>

<?php
$meses = array(
    1 => 'Janeiro', // Só acrescentar a chave 1 => antes do mes de jan
    'Fevereiro',
    'Março',
    'Abril',
    'Maio',
    'Junho',
    'Julho',
    'Agosto',
    'Setembro',
    'Outubro',
    'Novembro',
    'Dezembro'
);

print_r($meses);
echo '<br>' . $meses[5];
echo '<br>' . $meses[12];