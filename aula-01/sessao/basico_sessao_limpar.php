<?php 
session_start(); // é importante ter o session_start()
session_destroy();
header('Location: basico_sessao.php');
?>