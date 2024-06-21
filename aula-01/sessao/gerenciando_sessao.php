<div class="titulo">Gerenciando Sessão</div>

<?php
// session_id('u1vc60h7ivnhac9ldi93i2vbis');
session_start();
// u1vc60h7ivnhac9ldi93i2vbis
echo session_id();

$contador = &$_SESSION['contador'];
$contador = $contador ? $contador + 1 : 1;
echo '<br>' . $_SESSION['contador'];

if($_SESSION['contador'] % 5 === 0){
    session_regenerate_id();
}

if($_SESSION['contador'] >= 15){
    session_destroy();
}