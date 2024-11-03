<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5b/Google_Forms_2020_Logo.svg/800px-Google_Forms_2020_Logo.svg.png" type="image/x-icon">
    <title>Criar conta</title>
    <link rel="stylesheet" href="../css/animations.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="./registrar.css" rel="stylesheet">
  </head>

  <body class="text-center bg-gradient bg-dark">
    <form class="form-signin bg-gradient bg-light px-5 py-4 rounded-2 fadeInUp" method="POST" action="./criarConta.php">
      <img class="mb-4" src="https://cdn0.iconfinder.com/data/icons/social-messaging-ui-color-shapes-3/3/15-512.png" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal" style="font-size: 2.25rem;">Crie sua conta</h1>
      <hr>
      <label for="admins[nome]" class="sr-only mb-3">Nome</label>
      <input type="text" name="admins[nome]" id="nome" class="form-control" placeholder="Digite seu nome..." required autofocus>
      <label for="admins[email]" class="sr-only my-3">Endereço de E-mail</label>
      <input type="email" id="email" name="admins[email]" class="form-control" placeholder="Digite seu e-mail..." required>
      <label for="admins[senha]" class="sr-only my-3">Senha</label>
      <input type="password" id="senha" name="admins[senha]" class="form-control" placeholder="Digite sua senha..." required>
      <button class="btn btn-lg btn-primary btn-block mt-3" type="submit">Cadastrar</button>
      <p class="mt-4 text-muted">&copy; 2024 | Eduardo Reche</p>
    </form>
  </body>
</html>
