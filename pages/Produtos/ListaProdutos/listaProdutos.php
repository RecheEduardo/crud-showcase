<?php 

include '../../Login/conexaoDB.php';

$sql = 'SELECT * from produtos';
$result = $connection->query($sql);

if ($connection->query($sql) === FALSE) {
  echo "Houve um erro: " . $sql . "<br>" . $connection->error;
}

if(!isset($_SESSION)){
  session_start();
}

include '../../Login/segurancaUsuario.php';

while($row = $result->fetch_assoc()){
    $data[] = $row;
}

$connection->close();

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Produtos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Geologica:wght@100..900&family=Sora:wght@100..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../css/animations.css">
    <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5b/Google_Forms_2020_Logo.svg/800px-Google_Forms_2020_Logo.svg.png" type="image/x-icon">
    <style>
      body{
        font-family: 'Sora' !important;
      }
      .Add-btn{
        position: fixed;
        bottom: 30px;
        right: 30px;
        box-shadow: 0px 0px 42px -14px rgba(0,0,0,0.5);
        -moz-box-shadow: 0px 0px 42px -14px rgba(0,0,0,0.5);
        -webkit-box-shadow: 0px 0px 42px -14px rgba(0,0,0,0.5);
      }.Add-btn a{
        font-size: 1.5rem;
        padding: 10px !important;
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
                <h1 style="font-family: 'Geologica'; font-size: 2.75rem;" class="popIn"><i class="fa-regular fa-square-plus"></i> Cadastro de produtos:</h1>
            </div>
            <div>
              <a href="../../PaginaInicial/inicio.php" class="text-decoration-none" style='margin-left: 1rem;'>
                  <button class="btn btn-lg bg-gradient bg-primary text-light"><i class="fa-solid fa-home"></i> Início</button>
              </a>  
              <a href="../../Login/desconectar.php" class="text-decoration-none " style='margin-left: 1rem;'>
                <button class="btn btn-lg bg-danger bg-gradient text-light"><i class="fa-solid fa-right-from-bracket"></i> Sair</button>
              </a>
            </div>
          </div>
        </section>

        <section class="content">
          <div class="card mb-5 fadeInUp" style="border: none !important">
            <div class="card-body">
              <div class="row">
                <h1 class="text-secondary text-center mb-3 display-4"><b>Tabela de Produtos</b></h1>
                <hr>
                <?php 
                  if(empty($data)) { ?>
                    <h2 class="text-secondary text-center my-5 opacity-50 popUp">Não há nenhum produto cadastrado...</h2>
                  <?php 
                  }
                  else {
                    foreach($data as $produtos) { ?>
                      <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column mb-5 popUp">
                        <div class="card bg-light d-flex flex-fill">
                          <div class="card-header text-light border-bottom-0 bg-gradient bg-success">
                            Dados do produto <strong><?= $produtos['produto_id'] ?></strong>
                          </div>
                          <div class="card-body pt-0">
                            <div class="row">
                              <div>
                                <h2 class="my-3 text-dark"><?= $produtos['produto_nome'] ?></h2>
                                <p class="text-muted text-sm">
                                  <b></i> Descrição: </b> <?= $produtos['produto_descricao'] ?>
                                </p>    
                                <hr>  
                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                  <li class="small">
                                    <span class="fa-li"><i class="fas fa-tag"></i></span>
                                    Preço: <strong>R$ <?= number_format($produtos['produto_preco'], 2, ',', '.'); ?></strong>
                                  </li>
                                  <?php if ($produtos['updatedAt']) { ?>
                                    <li class="small">
                                      <span class="fa-li"><i class="fa-solid fa-calendar-days"></i></span>
                                      Ultima edição em:  <b><?= $produtos['updatedAt'] ?></b>
                                    </li> 
                                  <?php } else { ?>
                                  <?php } ?>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="card-footer d-flex justify-content-end">
                            <div class="text-right">
                              <a href="../EditarProduto/editarProduto.php?produto_id=<?= $produtos['produto_id'] ?>" class="btn btn-sm btn-primary">
                                <i class="fa-solid fa-pencil"></i> Editar  
                              </a>
                              <a href="#" class="btn btn-sm btn-danger delete-btn" data-produto-id="<?= $produtos['produto_id'] ?>">
                                <i class="fa-solid fa-trash"></i> Excluir  
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php }
                  }
                ?>   
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
    <div class = "Add-btn popIn">
      <a href="../CriarProduto/criarProduto.php" class="btn btn-sm btn-success">
        <i class="fa-solid fa-plus"></i> Adicionar produto  
      </a>
    </div>

    <!-- Modal de Confirmação -->
    <div class="modal fade mt-5 fadeInUp" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="deleteModalLabel">Confirmar Exclusão</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
          </div>
          <div class="modal-body">
            Tem certeza de que deseja excluir este produto?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <a href="#" id="confirmDeleteBtn" class="btn btn-danger">Excluir</a>
          </div>
        </div>
      </div>
    </div>

    <script src="../../../AdminLTE/plugins/bootstrapJS/bootstrap.bundle.min.js"></script>

    <!-- JavaScript para o Modal -->
    <script>
      document.querySelectorAll('.delete-btn').forEach(button => {
        button.addEventListener('click', function(event) {
          event.preventDefault();

          const produtoId = this.getAttribute('data-produto-id');
          
          const confirmDeleteBtn = document.getElementById('confirmDeleteBtn');
          confirmDeleteBtn.setAttribute('href', `../DeletarProduto/deletarProduto.php?produto_id=${produtoId}`);
          
          const deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
          deleteModal.show();
        });
      });
    </script>
  </body>
</html>
