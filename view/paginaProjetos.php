<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>

        <title>Projetos - Programação Web 2</title>

        <link type="text/css" rel="stylesheet" href="../_style/bootstrap.css"/>
        <link type="text/css" rel="stylesheet" href="../_style/estilo.css"/>
    </head>
    <body>
        <div class="container-fluid d-flex h-100 flex-column">

            <!-- Início da Barra de Navegação Responsiva -->
            <nav class="row navbar-expand-lg navbar-dark bg-dark justify-content-between">
                <a class="navbar-brand font-weight-bold p-2" href="../index.php"><img src="../_media/imagens/icons/03-projetosLogo.svg" width="30" height="30" class="d-inline-block align-top mx-2" alt="Logo da página" title="HTML - CSS - JS">Programação Web 2</a>

                <button class="navbar-toggler my-auto mr-2" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item">
                            <a class="btn btn-outline-light py-0 m-1" href="../index.php">Home</a>
                        </li>
                        <li class="nav-item "> 
                            <a class="btn btn-outline-light py-0 m-1" href="paginaAtividades.php">Atividades</a>
                        </li>
                        <li class="nav-item active"> <!-- Página atual -->
                            <a class="btn btn-light py-0 m-1" href="paginaProjetos.php">Projetos Didáticos</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-outline-light py-0 m-1 disabled" href="#" tabindex="-1" aria-disabled="true">Projetos Pessoais</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Início do conteúdo principal -->
            <main class="row h-100 overflow-auto flex-grow-1 bg-img" style="background-image: url('../_media/imagens/backgrounds/03-projetosBG.jpg');"> <!-- Background do conteúdo principal -->

                <div class="col d-flex flex-wrap align-content-start justify-content-center"> <!-- Container das cards -->
                    
                    <a class="text-decoration-none" href='../_projetosDidaticos/Projeto_01/index.php'> <!-- Início Card -->
                    <div class="card border-dark m-2" style="max-width: 18rem;"> 
                        <div class="card-header font-weight-bold darkbg-hover text-truncate">2020-09-10 - MVC Web</div>
                        <div class="p-1">
                            <img src="../_media/imagens/imgCards/proj_01-MVCWeb.png" class="card-img-top img-thumbnail card-image-box p-0" alt="Imagem de prévia da tarefa">
                        </div>
                        <div class="card-body text-dark border-top overflow-auto" style="max-height: 150px;">
                            <h5 class="card-title font-weight-bold lead">Projeto MVC Web</h5>
                            <p class="card-text cool-p">Projeto para compreensão de padrões de arquitetura de páginas web e de várias técnicas de validação e tratamento de dados via PHP e JavaScript.</p>
                        </div>
                    </div>
                    </a> <!-- Fim Card -->

                </div> <!-- Fim do Container das Cards -->

            </main>

            <footer class="row">
                <div class="col d-flex justify-content-end bg-dark">
                    <p class="p-2 m-0 text-white">Desenvolvido em 2020 por Leonardo T. Sanehira.</p>
                </div>
            </footer>

        </div>

        <script src=".././node_modules/jquery/dist/jquery.js"></script>
        <script src=".././node_modules/popper.js/dist/umd/popper.js"></script>
        <script src=".././node_modules/bootstrap/dist/js/bootstrap.js"></script>
    </body>
</html>
