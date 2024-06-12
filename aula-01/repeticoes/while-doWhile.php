<div class="titulo">While/Do While</div>

<?php
const VALOR_LIMITE = 5;
$contador = 0;

while ($contador < VALOR_LIMITE) {
    echo $contador, '<br>';
    $contador++;
}