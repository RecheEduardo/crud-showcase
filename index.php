<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar cliente</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="pages/css/animations.css">
    <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5b/Google_Forms_2020_Logo.svg/800px-Google_Forms_2020_Logo.svg.png" type="image/x-icon">
</head>
<body>
    <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <header>
            <style>
                #intro {
                    background-image: url(https://images.unsplash.com/photo-1613830224931-4f40c7f580e0?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D);
                    background-size: cover;
                    background-repeat: no-repeat;
                    background-attachment: fixed;
                    background-position: center;
                    height: 100svh;
                }
            </style>
            <div id="intro" class="bg-image shadow-2-strong ">
                <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0, 0, 0, 0.6)">
                    <div class="container popUp">
                        <div class="row justify-content-center">
                            <div class="col-xl-5 col-md-8">

                                <form class="bg-white rounded shadow-5-strong p-5" action="..\CRUDshowcase\pages\CreateUser\addToForm.php" method="POST">
                                    <h1 class="text-center pb-3"><b>Adicione o cliente</b></h1>
                                    <hr>
                                    <div class="form-outline mb-4" data-mdb-input-init>
                                        <label class="form-label" for="pessoa[nome]">Nome</label>
                                        <input type="text" id="nome" name="pessoa[nome]" class="form-control" placeholder="Digite seu nome..." required/>
                                    </div>

                                    <div class="form-outline mb-4" data-mdb-input-init>
                                        <label class="form-label" for="idade">Idade</label>
                                        <input type="number" id="idade" name="pessoa[idade]" class="form-control" placeholder="Digite sua idade..." required/>
                                    </div>

                                    <div class="form-outline mb-4" data-mdb-input-init>
                                        <label class="form-label" for="email">Email</label>
                                        <input type="email" id="email" name="pessoa[email]" class="form-control" placeholder="Digite seu E-Mail..." required/>
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
            <!-- Background image -->
        </header>
        <!--Main Navigation-->
    </div>
</body>
</html>