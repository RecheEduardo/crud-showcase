<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar cliente</title>
    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/animations.css">
    <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5b/Google_Forms_2020_Logo.svg/800px-Google_Forms_2020_Logo.svg.png" type="image/x-icon">
</head>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "edudatabase";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];

$sql = "SELECT * FROM pessoa where id = $id";

$result = $conn->query($sql);

if (!$result) {
    die("Erro na consulta: " . $conn->error);
}

$pessoa = $result->fetch_assoc();

$conn->close();


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
                                <form class="bg-white rounded shadow-5-strong p-5" action="edit.php?id=<?= $pessoa['id']?>" method="POST">
                                    <h1 class="text-center pb-3"><b>Editar cliente</b></h1>
                                    <hr />
                                    <div class="form-outline mb-4" data-mdb-input-init>
                                        <label class="form-label" for="pessoa[nome]">Nome</label>
                                        <input type="text" id="nome" name="pessoa[nome]" class="form-control" placeholder="Digite seu nome..." value = '<?= $pessoa['nome'] ?>'/>
                                    </div>

                                    <div class="form-outline mb-4" data-mdb-input-init>
                                        <label class="form-label" for="idade">Idade</label>
                                        <input type="number" id="idade" name="pessoa[idade]" class="form-control" placeholder="Digite sua idade..." value='<?= $pessoa['idade'] ?>'/>
                                    </div>

                                    <div class="form-outline mb-4" data-mdb-input-init>
                                        <label class="form-label" for="email">Email</label>
                                        <input type="email" id="email" name="pessoa[email]" class="form-control" placeholder="Digite seu E-Mail..." value='<?= $pessoa['email'] ?>'/>
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