<?php
session_start();

if ($_COOKIE['$usuario']) {
  $_SESSION['$usuario'] = $_COOKIE['$usuario'];
}

if (!$_SESSION['usuario']) {
  header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="assets-recursos/css/styles.css" />
  <title>Curso PHP</title>
</head>

<body>
  <header class="cabecalho">
    <h1>Curso PHP</h1>
    <h2>Índice do Conteúdo</h2>
  </header>
  <nav class="navegacao">
    <span class="usuario">Usuário: <?= $_SESSION['usuario'] ?></span>
    <a href="logout.php" class="vermelho">Sair</a>
  </nav>
  <main class="principal">
    <div class="conteudo">
      <?php require_once ('menu.php'); ?>
    </div>
  </main>
  <foote class="rodape">
    Bradd © <?= date('Y'); ?>
  </foote>
</body>

</html>