<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar perfume</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../css/animations.css">
    <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5b/Google_Forms_2020_Logo.svg/800px-Google_Forms_2020_Logo.svg.png" type="image/x-icon">
</head>

<?php

include '../../Login/conexaoDB.php';

include '../../Login/segurancaUsuario.php';

$id = $_GET['produto_id'];

$sql = "SELECT * FROM produtos where produto_id = $id";

$result = $connection->query($sql);

if (!$result) {
    die("Erro na consulta: " . $connection->error);
}

$produtos = $result->fetch_assoc();

$connection->close();


?>

<body>
    <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <header>
            <style>
                #intro {
                    background-image: url(https://images.unsplash.com/photo-1613830224931-4f40c7f580e0?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D);
                    background-size: cover;
                    background-position: center;
                    height: 100svh;
                }
            </style>
            <div id="intro" class="bg-image shadow-2-strong">
                <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0, 0, 0, 0.6)">
                    <div class="container popUp">
                        <div class="row justify-content-center">
                            <div class="col-xl-5 col-md-8">
                                <form class="bg-gradient bg-light rounded shadow-5-strong p-5" action="editar.php?produto_id=<?= $produtos['produto_id']?>" method="POST">
                                    <h1 class="text-center pb-3"><b>Editar perfume</b></h1>
                                    <hr />
                                    <div class="form-outline mb-4" data-mdb-input-init>
                                        <label class="form-label" for="nome">Nome do perfume</label>
                                        <input type="text" id="nome" name="produtos[produto_nome]" class="form-control" placeholder="Digite o nome..." value = '<?= $produtos['produto_nome'] ?>'/>
                                    </div>

                                    <div class="form-outline mb-4" data-mdb-input-init>
                                        <label class="form-label" for="preco">Preço</label>
                                        <input type="number" id="preco" name="produtos[produto_preco]" class="form-control" placeholder="Digite o preço..." min="0" step="0.01" value='<?= $produtos['produto_preco'] ?>'/>
                                    </div>

                                    <div class="form-outline mb-4" data-mdb-input-init>
                                        <label class="form-label" for="descricao">Descrição</label>
                                        <input type="text" id="descricao" name="produtos[produto_descricao]" class="form-control" placeholder="Digite a descrição..." value='<?= $produtos['produto_descricao'] ?>'/>
                                    </div>

                                    <div class="form-outline mb-4" data-mdb-input-init>
                                        <label class="form-label" for="imagem">Imagem</label>
                                        <input type="text" id="imagem" name="produtos[produto_imagem]" class="form-control" placeholder="Digite a descrição..." value='<?= $produtos['produto_imagem'] ?>'/>
                                    </div>

                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary btn-block" data-mdb-ripple-init>
                                            Editar 
                                        </button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
       
</body>
</html>