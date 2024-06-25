<?php
session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

if ($_POST['email']) {
  $usuarios = [
    [
      "nome" => "Aluno Cod3r",
      "email" => "aluno@cod3r.com.br",
      "senha" => "1234567",
    ],
    [
      "nome" => "Outro Aluno",
      "email" => "outro@email.com.br",
      "senha" => "7654321",
    ],
  ];

  foreach ($usuarios as $usuario) {
    $emailValido = $email === $usuario['email'];
    $senhaValida = $senha === $usuario['senha'];

    if ($emailValido && $senhaValida) {
      $_SESSION['erros'] = null;
      $_SESSION['usuario'] = $usuario['nome'];
      $expiracao = time() + 60 * 60 * 24 * 30;
      setcookie('usuario', $usuario['nome'], $expiracao);
      header('Location: index.php');
    }
  }

  if (!$_SESSION['usuario']) {
    $_SESSION['erros'] = ['Usuário/Senha inválido!'];
  }
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
  <link rel="stylesheet" href="assets-recursos/css/login.css" />
  <title>Curso PHP</title>
</head>

<body class="login">
  <header class="cabecalho">
    <h1>Curso PHP</h1>
    <h2>Seja Bem Vindo</h2>
  </header>
  <main class="principal">
    <div class="conteudo">
      <h3>Identifique-se</h3>
      <?php if ($_SESSION['erros']): ?>
        <div class="erros">
              <?php foreach ($_SESSION['erros'] as $erro): ?>
                <p><?= $erro ?></p>
              <?php endforeach ?>
        </div>
      <?php endif ?>
      <form action="#" method="post">
        <div>
          <label for="email">E-mail</label>
          <input type="email" name="email" id="email">
        </div>
        <div>
          <label for="senha">Senha</label>
          <input type="password" name="senha" id="senha">
        </div>
        <button>Entrar</button>
      </form>
    </div>
  </main>
  <foote class="rodape">
    Bradd © <?= date('Y'); ?>
  </foote>
</body>

</html>