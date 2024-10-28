<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <title>Criar conta</title>
    <link rel="stylesheet" href="../css/animations.css">
    <link
      rel="stylesheet"
      href="../../node_modules/bootstrap/dist/css/bootstrap.min.css"
    />
    <link href="./sign_in.css" rel="stylesheet">
  </head>

  <body class="text-center bg-gradient bg-dark">
    <form class="form-signin bg-gradient bg-light px-5 py-4 rounded-2 fadeInUp" method="POST" action="./create_user.php">
      <img class="mb-4" src="https://cdn0.iconfinder.com/data/icons/social-messaging-ui-color-shapes-3/3/15-512.png" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal" style="font-size: 2.25rem;">Crie sua conta</h1>
      <hr>
      <label for="usuarios[nome]" class="sr-only mb-3">Nome</label>
      <input type="text" name="usuarios[nome]" id="nome" class="form-control" placeholder="Digite seu nome..." required autofocus>
      <label for="usuarios[email]" class="sr-only my-3">Endereço de E-mail</label>
      <input type="email" id="email" name="usuarios[email]" class="form-control" placeholder="Digite seu e-mail..." required>
      <label for="usuarios[senha]" class="sr-only my-3">Senha</label>
      <input type="password" id="senha" name="usuarios[senha]" class="form-control" placeholder="Digite sua senha..." required>
      <button class="btn btn-lg btn-primary btn-block mt-3" type="submit">Cadastrar</button>
      <p class="mt-4 text-muted">&copy; 2024 | Eduardo Reche</p>
    </form>
  </body>
</html>
