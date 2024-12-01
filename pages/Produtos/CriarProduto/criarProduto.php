<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar perfume</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../css/animations.css">
    <link rel="shortcut icon" href="../../../images/LOGO_PEQUENA.png" type="image/x-icon">
    <style>
        .bg-image {
            background-image: url("../../../images/image-homee.jpg") !important;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            height: 100svh;
        }
    </style>
</head>
<body>
    <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <header>
            <div id="intro" class="bg-image shadow-2-strong ">
                <div class="mask d-flex align-items-center h-100">
                    <div class="container popUp">
                        <div class="row justify-content-center">
                            <div class="col-xl-5 col-md-8">
                                <form class="bg-gradient bg-light rounded shadow-5-strong p-5" action="./addProduto.php" method="POST">
                                    <h1 class="text-center pb-3"><b>Adicione o perfume</b></h1>
                                    <hr>
                                    <div class="form-outline mb-4" data-mdb-input-init>
                                        <label class="form-label" for="nome">Nome do perfume</label>
                                        <input type="text" id="nome" name="produtos[produto_nome]" class="form-control" placeholder="Digite o nome..." required/>
                                    </div>

                                    <div class="form-outline mb-4" data-mdb-input-init>
                                        <label class="form-label" for="preco">Preço</label>
                                        <input type="number" id="preco" name="produtos[produto_preco]" class="form-control" placeholder="Digite o preço..." min="0" step="0.01" required/>
                                    </div>

                                    <div class="form-outline mb-4" data-mdb-input-init>
                                        <label class="form-label" for="descricao">Descrição</label>
                                        <input type="text" id="descricao" name="produtos[produto_descricao]" class="form-control" placeholder="Digite a descrição..." required/>
                                    </div>

                                    <div class="form-outline mb-4" data-mdb-input-init>
                                        <label class="form-label" for="imagem">Imagem</label>
                                        <input type="text" id="imagem" name="produtos[produto_imagem]" class="form-control" placeholder="Digite a descrição..." required/>
                                    </div>


                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary btn-block" data-mdb-ripple-init>
                                            Adicionar
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</body>
</html>