<?php
session_start();
if (!$_SESSION['usuario']) {
  header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="assets-recursos/css/styles.css" />
  <link rel="stylesheet" href="assets-recursos/css/exercicio.css" />
  <title>Exercício</title>
</head>

<body class="exercicio">
  <header class="cabecalho">
    <h1>Curso PHP</h1>
    <h2>Visualização do Exercício</h2>
  </header>
  <nav class="navegacao">
    <span class="usuario">Usuário: <?= $_SESSION['usuario'] ?></span>
    <a href=<?= "{$_GET['dir']}/{$_GET['file']}.php" ?> class="verde">Sem Formatação</a>
    <a href="index.php">Voltar</a>
    <a href="logout.php" class="vermelho">Sair</a>
  </nav>
  <main class="principal">
    <div class="conteudo">
      <?php /*--Formas de chamar outro arquivo em outra pasta do PHP--*/
      //include("teste/teste.php"); //http://localhost:3000/aula-01/exercicio.php
      //include($_GET['dir'] . "/teste.php"); //http://localhost:3000/aula-01/teste/exercicio.php?dir=teste
      //include($_GET['dir'] . "/" . $_GET['file'] . ".php"); //http://localhost:3000/aula-01/exercicio.php?dir=teste&file=teste
      //include("{$_GET['dir']}/{$_GET['file']}.php"); //http://localhost:3000/aula-01/exercicio.php?dir=teste&file=teste
      include (__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php"); //http://localhost:3000/aula-01/exercicio.php?dir=teste&file=teste
      ?>
    </div>
  </main>
  <foote class="rodape">
    Bradd © <?= date('Y'); ?>
  </foote>
</body>

</html>