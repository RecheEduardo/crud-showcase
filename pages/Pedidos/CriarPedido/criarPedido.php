<?php 

include '../../Login/conexaoDB.php';

$clientes_sql = 'SELECT * from clientes';
$clientes_result = $connection->query($clientes_sql);

if ($connection->query($clientes_sql) === FALSE) {
  echo "Houve um erro: " . $clientes_sql . "<br>" . $connection->error;
}

$produtos_sql = 'SELECT * from produtos';
$produtos_result = $connection->query($produtos_sql);

if ($connection->query($produtos_sql) === FALSE) {
  echo "Houve um erro: " . $produtos_sql . "<br>" . $connection->error;
}

if(!isset($_SESSION)){
  session_start();
}

include '../../Login/segurancaUsuario.php';

while($cliente_row = $clientes_result->fetch_assoc()){
    $data_cliente[] = $cliente_row;
}

while($produto_row = $produtos_result->fetch_assoc()){
    $data_produto[] = $produto_row;
}

$connection->close();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar pedido</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../css/animations.css">
    <link rel="shortcut icon" href="../../../images/LOGO_PEQUENA.png" type="image/x-icon">
</head>
<body>
    <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <header>
            <style>
                #intro {
                    background-image: url("../../../images/image-homee.jpg") !important;
                    background-size: cover;
                    background-repeat: no-repeat;
                    background-attachment: fixed;
                    background-position: center;
                    height: 100svh;
                }
            </style>
            <div id="intro" class="bg-image shadow-2-strong ">
                <div class="mask d-flex align-items-center h-100">
                    <div class="container fadeInUp">
                        <div class="row justify-content-center">
                            <div class="col-xl-5 col-md-8">
                                <form class="bg-gradient bg-light rounded shadow-5-strong p-5" action="./addPedido.php" method="POST">
                                    <h1 class="text-center pb-3 text-dark"><b>Adicione o pedido</b></h1>
                                    <hr>
                                    <div class="form-outline mb-4" data-mdb-input-init>
                                        <label class="form-label" for="produto_pedido">Produto</label>
                                        <select class="form-select text-secondary" id="produto_pedido" name="pedidos[produto_pedido]" aria-label="Default select example" required>
                                            <option selected>Escolha o produto...</option>
                                            <?php 
                                                if(empty($data_produto)) { ?>
                                                <?php 
                                                }
                                                else {
                                                    foreach($data_produto as $produto) { ?>
                                                    <option value="<?= $produto['produto_id']?>"><?= $produto['produto_nome'] ?></option>
                                                    <?php }
                                                }
                                            ?>
                                        </select>
                                    </div>

                                    <div class="form-outline mb-4" data-mdb-input-init>
                                        <label class="form-label" for="quantidade">Quantidade</label>
                                        <input type="number" id="quantidade" name="pedidos[produto_quantidade]" class="form-control" min="1" placeholder="Digite a quantidade..." required/>
                                    </div>

                                    <div class="form-outline mb-4" data-mdb-input-init>
                                        <label class="form-label" for="endereco">Endereço completo</label>
                                        <input type="text" id="endereco" name="pedidos[endereco_pedido]" class="form-control" placeholder="Digite o endereço do pedido..." required/>
                                    </div>

                                    <div class="form-outline mb-4" data-mdb-input-init>
                                        <label class="form-label" for="usuario">Comprador</label>
                                        <select class="form-select text-secondary" id="usuario" name="pedidos[usuario_pedido]" aria-label="Default select example" required>
                                            <option selected>Quem comprou?</option>
                                            <?php 
                                                if(empty($data_cliente)) { ?>
                                                <?php
                                                }
                                                else {
                                                    foreach($data_cliente as $cliente) { ?>
                                                    <option value="<?= $cliente['id']?>"><?= $cliente['nome'] ?></option>
                                                    <?php }
                                                }
                                            ?> 
                                        </select>
                                    </div>

                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary btn-block" data-mdb-ripple-init>
                                            Fazer pedido
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Background image -->
        </header>
        <!--Main Navigation-->
    </div>
</body>
</html>