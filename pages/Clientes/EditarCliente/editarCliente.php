<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar cliente</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css"
        integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../css/animations.css">
    <link rel="shortcut icon"
        href="../../../images/LOGO_PEQUENA.png"
        type="image/x-icon">
</head>
<?php
include '../../Login/conexaoDB.php';
include '../../Login/segurancaUsuario.php';
$id = $_GET['id'];
$sql = "SELECT * FROM clientes where id = $id";
$result = $connection->query($sql);
if (!$result) {
    die("Erro na consulta: " . $connection->error);
}
$clientes = $result->fetch_assoc();
$connection->close();
?>

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
            <div id="intro" class="bg-image shadow-2-strong">
                <div class="mask d-flex align-items-center h-100">
                    <div class="container popUp">
                        <div class="row justify-content-center">
                            <div class="col-xl-5 col-md-8">
                                <form class="bg-gradient bg-light rounded shadow-5-strong p-5" action="editar.php?id=<?= $clientes['id'] ?>" method="POST">
                                    <h1 class="text-center pb-3"><b>Editar cliente</b></h1>
                                    <hr />
                                    <div class="form-outline mb-4" data-mdb-input-init>
                                        <label class="form-label" for="clientes[nome]">Nome</label>
                                        <input type="text" id="nome" name="clientes[nome]" class="form-control"
                                            placeholder="Digite seu nome..." value='<?= $clientes['nome'] ?>' />
                                    </div>
                                    <div class="form-outline mb-4" data-mdb-input-init>
                                        <label class="form-label" for="idade">Idade</label>
                                        <input type="number" id="idade" name="clientes[idade]" class="form-control"
                                            placeholder="Digite sua idade..." value='<?= $clientes['idade'] ?>' />
                                    </div>
                                    <div class="form-outline mb-4" data-mdb-input-init>
                                        <label class="form-label" for="email">Email</label>
                                        <input type="email" id="email" name="clientes[email]" class="form-control"
                                            placeholder="Digite seu E-Mail..." value='<?= $clientes['email'] ?>' />
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
    </div>
</body>

</html>