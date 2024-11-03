<?php 

include '../Login/conexaoDB.php';

if(!isset($_SESSION)){
  session_start();
}

include '../Login/segurancaUsuario.php';

$connection->close();

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Página inicial</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
      .options-btn{
        box-shadow: 0px 0px 42px -14px rgba(0,0,0,0.25);
        -moz-box-shadow: 0px 0px 42px -14px rgba(0,0,0,0.25);
        -webkit-box-shadow: 0px 0px 42px -14px rgba(0,0,0,0.25);
        transition: .5s;
      }.options-btn:hover{
        scale: 1.05;
        transition: .25s;
      }
      .brands-link{
        transition: .25s;
      }.brands-link:hover{
        transition: .25s;
        color: rgba(255,255,255,0.8) !important;
      }.footer-07{
        color: rgba(255,255,255,0.7);
      }
      .footer-07 a{
        color: rgba(255,255,255,0.7) !important;
        text-decoration: none;
      }

    </style>
  </head>

  <body class="hold-transition sidebar-mini">
    <div class="wrapper">
      <div class="content-wrapper">

        <section class="content-header bg-dark fadeInDown">
          <div class="container-fluid py-2 px-5 d-flex justify-content-between align-items-center">
            <div class="row text-center text-light">
                <h1 style="font-family: 'Geologica'; font-size: 2.75rem;" class="popIn"><i class="fa-regular fa-square-plus"></i> Administrador</h1>
            </div>
            <div>
              <a href="../Login/desconectar.php" class="text-decoration-none">
                <button class="btn btn-lg bg-danger bg-gradient text-light"><i class="fa-solid fa-right-from-bracket"></i> Sair</button>
              </a>
            </div>  
          </div>
        </section>

        <section class="content">
          <div class="card mb-5 fadeInUp" style="border: none !important">
            <div class="card-body">
              <div class="container d-flex gap-5 justify-content-between align-items-center popIn" style='height: 80svh;'>
                <div class='mx-5'>
                  <h1 class="text-secondary text-center mb-3 display-1">Seja bem vindo de volta, <b><?= $_SESSION['nome'] ?></b></h1>
                  <hr>
                  <h1 class="text-secondary text-center">Quais dados você quer acessar?</h1>
                </div>  
                <div class="d-flex flex-nowrap flex-column gap-4 my-3">
                  <a href="../Clientes/ListaClientes/listaClientes.php" class='text-light text-decoration-none d-flex gap-3 options-btn'>
                    <button class="btn bg-gradient bg-info p-5 w-100" style="white-space: nowrap;">
                        <p class="display-4 text-light mb-0">
                          <i class="fa-regular fa-user "></i> Clientes
                        </p>
                    </button>
                  </a>
                  <a href="../Produtos/ListaProdutos/listaProdutos.php" class='text-light text-decoration-none d-flex gap-3 options-btn'>
                    <button class="btn bg-gradient bg-info p-5 w-100" style="white-space: nowrap;">
                        <p class="display-4 text-light mb-0">
                        <i class="fa-solid fa-cart-shopping"></i> Produtos
                        </p>
                    </button>
                  </a>
                  <a href="../Pedidos/ListaPedidos/listaPedidos.php" class='text-light text-decoration-none d-flex gap-3 options-btn'>
                    <button class="btn bg-gradient bg-info p-5 w-100" style="white-space: nowrap;">
                        <p class="d-inline-block display-4 text-light mb-0">
                          <i class="fa-solid fa-table-list"></i> Pedidos
                        </p>
                    </button>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
</html>