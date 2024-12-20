<?php 

include '../../Login/conexaoDB.php';

$sql = 'SELECT 
            p.pedido_id,
            p.data_pedido,
            p.produto_pedido,
            p.produto_quantidade,
            p.endereco_pedido,
            p.usuario_pedido,
            c.nome AS nome_cliente,
            pr.produto_nome AS nome_produto
        FROM 
            pedidos p
        JOIN 
            clientes c ON p.usuario_pedido = c.id
        JOIN 
            produtos pr ON p.produto_pedido = pr.produto_id';
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
    <title>Pedidos</title>
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
      .box-shadows{
        box-shadow: 0px 0px 42px -14px rgba(0,0,0,0.15);
        -moz-box-shadow: 0px 0px 42px -14px rgba(0,0,0,0.15);
        -webkit-box-shadow: 0px 0px 42px -14px rgba(0,0,0,0.15);
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
                <h1 style="font-family: 'Geologica'; font-size: 2.75rem;" class="popIn"><i class="fa-regular fa-square-plus"></i> Cadastro de pedidos:</h1>
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
                <h1 class="text-secondary text-center mb-3 display-4"><b>Tabela de Pedidos</b></h1>
                <hr>
                <?php 
                  if(empty($data)) { ?>
                    <h2 class="text-secondary text-center my-5 opacity-50 popUp">Não há nenhum pedido cadastrado...</h2>
                  <?php 
                  }
                  else { ?>
                    <div class="card px-0 fadeInUp box-shadows" style="margin: 0 auto; width: 90%;">
                      <div class="card-header border-transparent d-flex justify-content-between bg-gradient bg-dark text-light">
                        <h3 class="card-title mb-0"><b>Pedidos</b></h3>

                        <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus text-light"></i>
                          </button>
                        </div>
                      </div>
                      <div class="card-body p-3" style="display: block">
                        <div class="table-responsive">
                          <table class="table m-0">
                            <thead>
                              <tr>
                                <th>Código do pedido</th>
                                <th>Nome do Perfume</th>
                                <th>Quantidade</th>
                                <th>Data do pedido</th>
                                <th>Nome do Comprador</th>
                                <th>Endereço do pedido</th>
                                <th> </th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php foreach($data as $pedido) { ?>
                              <tr>
                                <td>
                                  PE<?= sprintf('%05d', $pedido['pedido_id']) ?>
                                </td>
                                <td>
                                  <?= $pedido['nome_produto'] ?>
                                </td>
                                <td>
                                  <?= $pedido['produto_quantidade'] ?>
                                </td>
                                <td>
                                  <?= $pedido['data_pedido'] ?>
                                </td>
                                <td>
                                  <?= $pedido['nome_cliente'] ?>
                                </td>
                                <td>
                                  <?= $pedido['endereco_pedido'] ?>
                                </td>
                                <td>
                                  <a href="../EditarPedido/editarPedido.php?pedido_id=<?= $pedido['pedido_id']?>" class="text-decoration-none">
                                    <button class="btn bg-gradient bg-primary">
                                      <i class="fa-solid fa-pen text-light"></i>
                                    </button>
                                  </a>
                                  <a href="../DeletarPedido/deletarPedido.php?pedido_id=<?= $pedido['pedido_id']?>" class="text-decoration-none delete-btn" data-id="<?= $pedido['pedido_id'] ?>">
                                    <button class="btn bg-gradient bg-danger">
                                        <i class="fa-solid fa-trash text-light"></i>
                                    </button>
                                  </a>
                                </td>
                              </tr>
                            <?php }
                          }
                        ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
    <div class = "Add-btn popIn">
      <a href="../CriarPedido/criarPedido.php" class="btn btn-sm btn-success">
        <i class="fa-solid fa-plus"></i> Adicionar pedido  
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
            Tem certeza de que deseja excluir este pedido?
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
      document.querySelectorAll('.delete-btn').forEach(a => {
        a.addEventListener('click', function(event) {
          event.preventDefault();

          const PedidoId = this.getAttribute('data-id');
          const confirmDeleteBtn = document.getElementById('confirmDeleteBtn');
          confirmDeleteBtn.setAttribute('href', `../DeletarPedido/deletarPedido.php?pedido_id=${PedidoId}`);

          const deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
          deleteModal.show();
        });
      });
    </script>
  </body>
  <!-- adminLTE SCRIPTS - Ignore  -->
  <script src="../../../AdminLTE/plugins/jquery/jquery.min.js"></script>
  <script src="../../../AdminLTE/dist/js/adminlte.js?v=3.2.0"></script>
</html>
