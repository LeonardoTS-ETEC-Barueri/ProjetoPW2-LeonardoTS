<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Projeto Programação Web 2</title>

        <link type="text/css" rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css"/>
        <link type="text/css" rel="stylesheet" href="_style/estilo.css"/>
    </head>
    <body>
        <div class="container-fluid d-flex h-100 flex-column">
            <nav class="row navbar navbar-dark bg-dark">
                <a class="navbar-brand font-weight-bold" href="#">Projeto PW2</a>
            </nav>

            <main class="row flex-grow-1">
                <div class="col bg-light">
                    <h1>Olá mundo!</h1>
                    <br/>
                    <p>Sou o início de um projeto bacana para adquirir conhecimentos sobre PHP!</p>
                </div>
                <div class="col bg-2">
                    <?php
                    echo "<h1>Olá, sou um título feito pelo PHP</h1>".
                    "<br>".
                    "<p> Sou um parágrafo escrito através do PHP! </p>";
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
