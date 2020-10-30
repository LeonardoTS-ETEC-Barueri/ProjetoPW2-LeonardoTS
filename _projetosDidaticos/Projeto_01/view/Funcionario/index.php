<?php
    session_start();
    if(!isset($_SESSION['login']) || $_SESSION['login'] != true){
        header("Location: ../Login/");
    }
    switch($_SESSION['tipo']){
        case "Administrador":
            header("Location: ../Administrador/");
        break;
        case "Cliente":
            header("Location: ../Cliente/");
        break;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>

        <title>Projetos - Programação Web 2</title>

        <link type="text/css" rel="stylesheet" href="../../../../_style/bootstrap.css"/>
        <link type="text/css" rel="stylesheet" href="../../../../_style/estilo.css"/>
        <link type="text/css" rel="stylesheet" href="../../_estilo/estiloProj.css" />

    </head>
    <body>
        <div class="container-fluid d-flex h-100 flex-column">

            <!-- Início da Barra de Navegação Responsiva -->
            <nav class="row navbar-expand-lg navbar-dark bg-dark justify-content-between">
                <a class="navbar-brand font-weight-bold p-2" href="../../../../index.php"><img src="../../../../_media/imagens/icons/03-projetosLogo.svg" width="30" height="30" class="d-inline-block align-top mx-2" alt="Logo da página" title="HTML - CSS - JS">Programação Web 2</a>

                <button class="navbar-toggler my-auto mr-2" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item">
                            <a class="btn btn-outline-light py-0 m-1" href="../../../../index.php">Home</a>
                        </li>
                        <li class="nav-item "> 
                            <a class="btn btn-outline-light py-0 m-1" href="../../../../view/paginaAtividades.php">Atividades</a>
                        </li>
                        <li class="nav-item active"> <!-- Página atual -->
                            <a class="btn btn-light py-0 m-1" href="../../../../view/paginaProjetos.php">Projetos Didáticos</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-outline-light py-0 m-1 disabled" href="#" tabindex="-1" aria-disabled="true">Projetos Pessoais</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Início do conteúdo principal -->
            <main class="row h-100 overflow-auto flex-grow-1 bg-img" style="background-image: url('../../_imagens/main-bg.jpg');"> <!-- Background do conteúdo principal -->

                <div class="col my-5"> <!-- Container principal -->

                <div class="d-flex h-100 justify-content-center align-items-center"> 
                        <div class="col-sm-6 jumbotron py-5" style="background-color: rgba(255,255,255,0.8);">

                            <div class="form-row pt-4 justify-content-center">  
                                <h1 class="text-center lead font-weight-bold">Olá [ Funcionário ] - Seja bem-vindo(a) <?php echo $_SESSION['nome']; ?>!</h1>
                            </div>
                            
                        </div>

                    <?php

                    ?>
                   
                </div>

            </main>

            <footer class="row">
                <div class="col d-flex justify-content-end bg-dark">
                    <p class="p-2 m-0 text-white">Desenvolvido em 2020 por Leonardo T. Sanehira.</p>
                </div>
            </footer>

        </div>

        <script src="../../../../node_modules/jquery/dist/jquery.js"></script>
        <script src="../../../../node_modules/popper.js/dist/umd/popper.js"></script>
        <script src="../../../../node_modules/bootstrap/dist/js/bootstrap.js"></script>
        <script src="../../../../node_modules/sweetalert2/dist/sweetalert2.all.js"></script>
        <script src="../../javascript/validacoes.js"></script>
    </body>
</html>
