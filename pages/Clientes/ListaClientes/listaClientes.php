<?php 

include '../../Login/conexaoDB.php';

$sql = 'SELECT * from clientes';
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
    <title>Clientes</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Geologica:wght@100..900&family=Sora:wght@100..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../css/animations.css">
    <link rel="shortcut icon" href="../../../images/LOGO_PEQUENA.png" type="image/x-icon">
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
                <h1 style="font-family: 'Geologica'; font-size: 2.75rem;" class="popIn"><i class="fa-regular fa-square-plus"></i> Cadastro de clientes:</h1>
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
                <h1 class="text-secondary text-center mb-3 display-4"><b>Tabela de Clientes</b></h1>
                <hr>
                <?php 
                  if(empty($data)) { ?>
                    <h2 class="text-secondary text-center my-5 opacity-50 popUp">Não há nenhum cliente cadastrado...</h2>
                  <?php 
                  }
                  else {
                    foreach($data as $pessoa) { ?>
                      <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column mb-5 popUp">
                        <div class="card bg-light d-flex flex-fill">
                          <div class="card-header bg-gradient bg-primary text-light border-bottom-0">
                            Dados do cliente <strong><?= $pessoa['id'] ?></strong>
                          </div>
                          <div class="card-body pt-0">
                            <div class="row">
                              <div>
                                <h2 class="my-3 text-dark"><?= $pessoa['nome'] ?></h2>
                                <p class="text-muted text-sm">
                                  <b><i class="fas fa-envelope"></i> Email: </b> <?= $pessoa['email'] ?>
                                </p>
                                <hr>
                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                  <li class="small">
                                    <span class="fa-li"><i class="fas fa-user"></i></span>
                                    Idade: <strong><?= $pessoa['idade'] ?> anos</strong>
                                  </li>
                                  <li class="small">
                                    <span class="fa-li"><i class="fa-solid fa-calendar-days"></i></span>
                                    Usuário desde: <strong><?= $pessoa['created_at'] ?></strong>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="card-footer d-flex justify-content-end">
                            <div class="text-right">
                              <a href="../EditarCliente/editarCliente.php?id=<?= $pessoa['id'] ?>" class="btn btn-sm btn-primary">
                                <i class="fa-solid fa-pencil"></i> Editar  
                              </a>
                              <a href="#" class="btn btn-sm btn-danger delete-btn" data-id="<?= $pessoa['id'] ?>">
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
      <a href="../CriarCliente/criarCliente.php" class="btn btn-sm btn-success">
        <i class="fa-solid fa-plus"></i> Adicionar cliente  
      </a>
    </div>
    <!-- Modal de Confirmação -->
    <div class="modal fade fadeInUp mt-5" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="deleteModalLabel">Confirmar Exclusão</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
          </div>
          <div class="modal-body">
            Tem certeza de que deseja excluir este cliente?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <a href="#" id="confirmDeleteBtn" class="btn btn-danger">Excluir</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Incluindo o JavaScript do Bootstrap Bundle -->
    <script src="../../../AdminLTE/plugins/bootstrapJS/bootstrap.bundle.min.js"></script>

    <!-- JavaScript para o Modal de Exclusão -->
    <script>
      document.querySelectorAll('.delete-btn').forEach(button => {
        button.addEventListener('click', function(event) {
          event.preventDefault();

          const clienteId = this.getAttribute('data-id');
          const confirmDeleteBtn = document.getElementById('confirmDeleteBtn');
          confirmDeleteBtn.setAttribute('href', `../DeletarCliente/deletarCliente.php?id=${clienteId}`);

          const deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
          deleteModal.show();
        });
      });
    </script>
  </body>  
</html>
