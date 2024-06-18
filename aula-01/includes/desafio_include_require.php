<div class="titulo">Desafio Include & Require</div>

<?php
echo "Usando o Include e Require:<br>para obter dados de 2 arquivos 'pessoa.php' e 'usuario.php'<hr>";

ini_set('display_errors', 1);
require('usuario.php');

$usuario = new Usuario("Gustavo Mendonça", 21, "gust_mend");
echo $usuario->apresentar();
unset($usuario);