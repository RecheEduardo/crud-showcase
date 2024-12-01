<?php 
  include '../../Login/conexaoDB.php';
  
  include '../../Login/segurancaUsuario.php';

  include 'Perfume.php';
  
  $id = $_GET['produto_id'];

  $perfume = Perfume::carregarDoBanco($id, $connection);
  
  $connection->close();
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Detalhes do perfume</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css"
      integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Geologica:wght@100..900&family=Sora:wght@100..800&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
      integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="../../css/animations.css" />
    <link
      rel="shortcut icon"
      href="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5b/Google_Forms_2020_Logo.svg/800px-Google_Forms_2020_Logo.svg.png"
      type="image/x-icon"
    />
    <style>
      body{
        font-family: 'Sora' !important;
      }
      .content-header{
        min-height: 8svh;
      }
      .site{
        scale: 0.90;
      }
      .site h3{
        font-size: 5rem;
        font-weight: bolder;
      }.site h2{
        font-size: 3rem;
      }
      .site p{
        font-size: 1.75rem;
      }
      .product-image{
        max-width: 90% !important;
        border-radius: 5px;
      }
    </style>
  </head>

  <body>
    <section class="content-header bg-dark fadeInDown">
      <div
        class="container-fluid py-2 px-5 d-flex justify-content-between align-items-center"
      >
        <div class="row text-center text-light">
          <h1
            style="font-family: 'Geologica'; font-size: 2.75rem"
            class="popIn"
          >
            <i class="fa-solid fa-expand"></i> Detalhes do perfume <?= $id ?>
          </h1>
        </div>
        <div>
          <a
            href="listaProdutos.php"
            class="text-decoration-none"
            style="margin-left: 1rem"
          >
            <button class="btn btn-lg bg-success bg-gradient text-light">
              <i class="fa-solid fa-right-from-bracket"></i> Voltar
            </button>
          </a>
        </div>
      </div>
    </section>

    <section class="site fadeInDown">
      <section class="content">
        <div class="card card-solid">
          <div class="card-body">
            <div class="row">
              <div class="col-12 col-sm-6">
                <h3 class="d-inline-block d-sm-none">
                  <?= $perfume->verNome();?>
                </h3>
                <div class="col-12">
                  <img
                    src="<?= $perfume->verUrlImagem();?>"
                    class="product-image"
                    alt="Product Image"
                  />
                </div>
              </div>
              <div class="col-12 col-sm-6">
                <h3 class="my-3">
                  <?= $perfume->verNome(); ?>
                </h3>
                <hr>
                <p>
                  <?= $perfume->verDescricao()?>
                </p>
                <hr />

                <div class="bg-gradient bg-success text-light py-4 px-3 mt-4">
                  <h2 class="mb-0">
                    <b>R$ <?= number_format($perfume->verPreco(), 2, ',', '.'); ?></b>
                  </h2>
                  <hr>
                  <h4 class="mt-0">
                    <small>ou | 10x de <?= number_format(($perfume->verPreco()) / 10, 2, ',', '.'); ?> sem juros </small>
                  </h4>
                </div>
                <hr />
              </div>
            </div>
          </div>
        </div>
      </section>
      <script src="adminlte\plugins\jquery\jquery.min.js"></script>
      <script src="adminlte\dist\js\adminlte.min.js"></script>
      <script>
        $(document).ready(function () {
          $(".product-image-thumb").on("click", function () {
            var $image_element = $(this).find("img");
            $(".product-image").prop("src", $image_element.attr("src"));
            $(".product-image-thumb.active").removeClass("active");
            $(this).addClass("active");
          });
        });
      </script>
    </section>
  </body>
</html>
