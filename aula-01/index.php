<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="assets-recursos/css/styles.css" />
    <title>Curso PHP</title>
  </head>
  <body>
    <header class="cabecalho">
      <h1>Curso PHP</h1>
      <h2>Índice do Conteúdo</h2>
    </header>
    <main class="principal">
      <div class="conteudo">
        <nav class="modulos">
          <div class="modulo verde">
            <h3>Módulo 01</h3>
            <ul>
              <li><a href="exercicio.php?dir=teste&file=teste">Exercício A</a></li>
            </ul>
          </div>
        </nav>
      </div>
    </main>
    <foote class="rodape">
      Bradd © <?= date('Y'); ?>
    </foote>
  </body>
</html>
