<div class="titulo">Include vs Require</div>
<!-- 
    Include permite a execução do código, mas dar Warning
    Require não permite a execução e dar Fatal error
    ini_set('display_errors', 1) mostra os erros
-->
<?php
ini_set('display_errors', 1);

echo "Usando include com arquivo inexistente...<br>";
include('arquivo_inexistente.php');

echo "Usando require com arquivo inexistente...<br>";
require('arquivo_inexistente.php');

echo "Não achou mesmo... <br>";