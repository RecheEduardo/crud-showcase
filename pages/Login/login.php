<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Fazer Login</title>
    <link
      rel="stylesheet"
      href="../../node_modules/bootstrap/dist/css/bootstrap.min.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Geologica:wght@100..900&family=Sora:wght@100..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/animations.css">
    <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5b/Google_Forms_2020_Logo.svg/800px-Google_Forms_2020_Logo.svg.png" type="image/x-icon">
    <style>
      body{
        font-family: 'Sora' !important;
      }
      .content{
        min-height: 92svh;
      }
      .content-header{
        min-height: 8svh;
      }
    </style>
  </head>

  <body class="hold-transition sidebar-mini bg-dark">
    <div class="wrapper fadeInDown">
      <div class="content-wrapper">
        <section class="content-header bg-dark">
          <div class="container-fluid py-2 px-5 d-flex justify-content-between align-items-center">
            <div class="row text-center text-light">
                <h1 style="font-family: 'Geologica';" class="fadeInDown mx-3">Bem vindo!</h1>
            </div>
            <form >
                <div class="form-group d-flex gap-3 fadeInDown align-items-center">
                    <label for="email"><i class="fa-solid fa-envelope  text-secondary" style="font-size: 30px;"></i></label>
                    <input type="email" name="email" id="email" placeholder="Digite seu email..." class="form-control">
                    <label for="email"><i class="fa-solid fa-key text-secondary" style="font-size: 30px;"></i></label>
                    <input type="password" name="senha" id="senha" placeholder="Digite sua senha..." class="form-control">
                    <input type="submit" value="Entrar" class="btn btn-lg btn-success">
                </div>
            </form>
          </div>
        </section>
        <section class="content bg-gradient bg-dark d-flex justify-content-center align-items-center">
          <div class="container bg-light rounded-5 p-4 py-5 popIn">
            <h1 class="display-2 text-center"><b>Olá, usuário.</b></h1>
            <p class="display-6 my-5 text-secondary text-center"><i class="fa-solid fa-circle-exclamation"></i> Para ter acesso ao sistema, por favor, realize o login acima com seus dados cadastrais.</p>
          </div>
        </section>
      </div>
    </div>
</html>
