<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>

        <title>Projeto Programação Web 2</title>

        <link type="text/css" rel="stylesheet" href="../_style/bootstrap.css"/>
        <link type="text/css" rel="stylesheet" href="../_style/estilo.css"/>
    </head>
    <body>
        <div class="container-fluid d-flex h-100 flex-column">

            <!-- Início da Barra de Navegação Responsiva -->
            <nav class="row navbar-expand-lg navbar-dark bg-dark justify-content-between">
                <a class="navbar-brand font-weight-bold p-2" href=""><img src="../_media/imagens/icons/01-indexLogo.svg" width="30" height="30" class="d-inline-block align-top mx-2" alt="Logo da página" title="HTML - CSS - JS">Programação Web 2</a>

                <button class="navbar-toggler my-auto mr-2" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item">
                            <a class="btn btn-outline-light py-0 m-1" href="../index.php">Home</a>
                        </li>
                        <li class="nav-item active"> <!-- Página atual -->
                            <a class="btn btn-light py-0 m-1" href="">Atividades</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-outline-light py-0 m-1" href="#">Projetos Didáticos</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-outline-light py-0 m-1 disabled" href="#" tabindex="-1" aria-disabled="true">Projetos Pessoais</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Início do conteúdo principal -->
            <main class="row h-100 overflow-hidden flex-grow-1"> <!-- 'h-100' e 'overflow-hidden' ou 'overflow-auto' fazem com que a página fique resposiva, porém que mantenha um tamanho fixo para o layout, adicionando barras de rolagem para conteúdo que se extenda além dos limites da página. Deixando a navegação mais agradável. *-*   -->

                    <div class="col bg-light bg-img">
                    
                        <div class="d-flex h-100 justify-content-center align-items-center">
                            <div class="col-6 jumbotron" style="background-color: rgba(255,255,255,0.75);">

                                <h1 class="text-center lead font-weight-bold">Página de Atividades</h1>
                                <h2 class="text-center lead font-weight-normal">Aqui teremos vários cards que direcionam para as páginas das atividades.</h2>
                            
                            </div>
                        </div>
                        
                    </div>

            </main>

            <footer class="row">
                <div class="col d-flex justify-content-end bg-dark">
                    <p class="p-2 m-0 text-white">Desenvolvido em 2020 por Leonardo T. Sanehira.</p>
                </div>
            </footer>

        </div>

        <script src="./node_modules/jquery/dist/jquery.js"></script>
        <script src="./node_modules/popper.js/dist/umd/popper.js"></script>
        <script src="./node_modules/bootstrap/dist/js/bootstrap.js"></script>
    </body>
</html>
