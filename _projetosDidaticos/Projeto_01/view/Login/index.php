<?php

session_start();
session_unset();    // Como ainda não fiz botões de deslogar nas páginas dos tipos de usuário, vou deixar que a página de Login faça o "Logout" forçado do usuário. Quando tivermos botões na página do usuário, ele deverá ser redirecionado diretamente para sua própria página ao tentar acessar a página de Login.

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
                    
                    <div class="d-flex h-100 justify-content-center align-items-center">    <!-- Container Form -->
                        <div class="col-sm-6 jumbotron m-2 p-2" style="background-color: rgba(255,255,255,0.8);">

                            <div class="form-row justify-content-center">
                                <h1 class="display-4 text-center">Login</h1>
                            </div>

                            <!-- Início do Formulário -->
                            <form action="../../controller/validarLogin.php" method="POST" id="tLogin">
                                <div class="form-row">
                                    <div class="col-lg-6 my-3 mx-auto">
                                        <input class="form-control form-control-lg" name="nUser" id="tUser" type="text" placeholder="E-mail ou Nome de usuário"/>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-lg-6 my-3 mx-auto">
                                        <input class="form-control form-control-lg" name="nPass" id="tPass" type="password" placeholder="Senha"/>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-lg-6 my-3 mx-auto">
                                        <input class="form-control form-control-lg btn-success" name="nBtnEntrar" id="tBtnEntrar" type="submit" value="Entrar"/>
                                        <a class="nav-link lead p-0 m-0" href="#">Esqueci minha senha</a>
                                    </div>
                                </div>
                                
                                <div class="form-row p-0 justify-content-end">
                                    <a class="nav-link lead  font-weight-bold" href="../../index.php">Voltar</a>
                                </div>
                            </form>
                        
                        </div>
                    </div> <!-- Fim container form -->

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
