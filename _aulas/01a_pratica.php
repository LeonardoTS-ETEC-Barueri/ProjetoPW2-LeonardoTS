<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>

        <title>Aula 01 - Introdução ao PHP</title>

        <link type="text/css" rel="stylesheet" href="../_style/bootstrap.css"/>
        <link type="text/css" rel="stylesheet" href="../_style/estilo.css"/>
    </head>
    <body>
        <div class="container-fluid d-flex h-100 flex-column">

            <nav class="row navbar navbar-dark bg-dark">
                <a class="navbar-brand font-weight-bold" href="../index.php">Projeto PW2</a>
            </nav>

            <main class="row h-100 overflow-auto flex-grow-1">

                <div class="col bg-light">
                    <h1>Prática das Lógicas de Programação em PHP</h1>
                    <h2>Data: 2020.08.18</h2>
                    <hr/>
                    
                    <?php 
                        echo "<p><strong>Tabuada do 10</strong</p>";

                        echo "<table>";
                        $num = 10;
                        for ($mult = 0; $mult < 11; $mult++){
                            $res = $num * $mult;
                            echo "<tr style='border-style: double;'><td>";
                            echo "$num * $mult = $res";
                            echo "</td></tr>";
                        }
                        echo "</table>";
                        
                    ?>

                    <br>
                    <p class="linkForte">• <a href="javascript: history.go(-1)">Voltar</a></p>
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
