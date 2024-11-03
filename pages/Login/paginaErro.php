<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/animations.css">
    <link rel="shortcut icon" href="https://www.iconarchive.com/download/i103464/paomedia/small-n-flat/shield-error.1024.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .main-ctn{
            min-height: 100svh;
        }
        .error-msg{
            font-size: 5rem;
        }
        .main-ctn{
            font-weight: bold;
        }
    </style>
</head>
<body class="bg-gradient bg-danger">
    <div class="main-ctn container d-flex flex-column justify-content-center align-items-center gap-5 popIn">
        <h1 class="text-light error-msg">
            <b><i class="fa-solid fa-triangle-exclamation"></i> Erro</b>
        </h1>
        <h1 class="text-light text-center display-3">Você não tem permissão para entrar nessa página...</h1>
        <button class="btn btn-lg bg-gradient bg-success w-auto"><a href="../.." class="text-white text-center text-decoration-none" style="font-size: 3rem;">
            <i class="fa-solid fa-backward-step"></i> Voltar</a>
        </button>
    </div>
</body>
</html>

