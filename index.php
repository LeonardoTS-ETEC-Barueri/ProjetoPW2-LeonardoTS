<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>

        <title>Projeto Programação Web 2</title>

        <link type="text/css" rel="stylesheet" href="_style/bootstrap.css"/>
        <link type="text/css" rel="stylesheet" href="_style/estilo.css"/>
    </head>
    <body>
        <div class="container-fluid d-flex h-100 flex-column">

            <nav class="row navbar navbar-dark bg-dark">
                <a class="navbar-brand font-weight-bold" href="index.php">Projeto PW2</a>
            </nav>

            <main class="row h-100 overflow-hidden flex-grow-1"> <!-- 'h-100' e 'overflow-hidden' ou 'overflow-auto' fazem com que a página fique resposiva, porém que mantenha um tamanho fixo para o layout, adicionando barras de rolagem para conteúdo que se extenda além dos limites da página. Deixando a navegação mais agradável. *-*   -->
                <div class="col h-100 overflow-auto bg-light">  <!-- Coluna 01 -->
                    
                    <h1>Olá mundo!</h1>
                    <br/>
                    <p>Sou o início de um projeto bacana para adquirir conhecimentos sobre PHP!</p>
                    <hr/>

                    <p> <!-- Botões de Listagem -->
                        <a class="btn btn-dark" data-toggle="collapse" href="#listaAulas" role="button" aria-expanded="false" aria-controls="listaAulas">
                            Lista de Aulas
                        </a>
                        <a class="btn btn-dark" data-toggle="collapse" href="#listaAtividades" role="button" aria-expanded="false" aria-controls="listaAtividades">
                            Lista de Atividades
                        </a>
                    </p>

                    <div class="collapse" id="listaAulas">
                        <br>
                        <div class="card card-body">
                            <ul>
                                <li><a href="_aulas/01_aulaIntroPHP.php">Aula 01 - Introdução ao PHP</a></li>
                                <li><a href="_aulas/01a_pratica.php">Aula 01a - Prática das Lógicas de Programação em PHP</a></li>
                                <li><a href="_aulas/02a_pratica.php">Aula 02a - Recaptulação da Lógica de Programação em PHP</a></li>
                                <li><a href="_aulas/03_ArraysPHP.php">Aula 03 - Usando Arrays em PHP</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="collapse" id="listaAtividades">
                        <br>
                        <div class="card card-body">
                            <ul>
                                <li><a href="_atividades/01_calculadora.php">(2020.08.27) - Atividade 01 - Calculadora PHP</a></li>
                            </ul>
                        </div>
                    </div>
                    

                </div>
                <div class="col h-100 overflow-auto bg-2"> <!-- Coluna 02 -->


                    <?php
                    echo "<h1>Olá, sou um título feito com PHP</h1>".
                    "<br>".
                    "<p> Sou um parágrafo escrito com PHP! </p>";
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
