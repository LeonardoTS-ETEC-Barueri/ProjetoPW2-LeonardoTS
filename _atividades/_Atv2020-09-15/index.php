<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>

        <title>Projeto 01 - Páginas e Formulários</title>

        <link type="text/css" rel="stylesheet" href="../../_style/bootstrap.css"/>
        <link type="text/css" rel="stylesheet" href="../../_style/estilo.css"/>
        <link type="text/css" rel="stylesheet" href="estilo/estiloProj.css"/>



    </head>
    <body>
        <div class="container-fluid d-flex h-100 flex-column">

            <nav class="row navbar navbar-dark bg-dark">
                <a class="navbar-brand font-weight-bold" href="../../index.php">Projeto PW2</a>
            </nav>

            <main class="row h-100 overflow-auto flex-grow-1">

                <div class="col bg-light bg-img">
                    
                    <div class="d-flex h-100 justify-content-center align-items-center">
                        <div class="col-6 jumbotron" style="background-color: rgba(255,255,255,0.8);">

                            <h1 class="display-3 text-center">Olá seja bem-vindo!</h1>
                            <h2 class="display-4 text-center">O que deseja fazer?</h2>

                            <div class="d-flex justify-content-center pt-5">
                                <a class="btn btn-success mx-3" href="_view/login.php" role="button">Login</a>
                                <a class="btn btn-info mx-3" href="#" role="button">Cadastro</a>
                            </div>
                        
                        </div>
                    </div>

                    <?php

                    ?>

                   
                </div>

            </main>

            <footer class="row">
                <div class="col d-flex justify-content-end bg-dark">
                    <p class="p-2 m-0 text-white">Desenvolvido em 2020 por Leonardo T. S.</p>
                </div>
            </footer>

        </div>

        <script src="./node_modules/jquery/dist/jquery.js"></script>
        <script src="./node_modules/popper.js/dist/umd/popper.js"></script>
        <script src="./node_modules/bootstrap/dist/js/bootstrap.js"></script>
    </body>
</html>
