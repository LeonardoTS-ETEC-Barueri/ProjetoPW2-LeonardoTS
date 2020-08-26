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
                    <h1>Introdução ao PHP</h1>
                    <h2>Data: 2020.08.18</h2>
                    <hr>
                    <p>Hoje vimos um pouco sobre o uso do XAMPP, PHP e Bootstrap.</p>
                    <p>Também relembramos os conceitos de Client-side e Server-side.</p>
                    <p class="linkForte">• <a href="javascript: history.go(-1)">Voltar</a></p>
                </div>

                <div class="col bg-2">
                    <?php 
                        echo 'Olá mundo!';
                        echo "<h1>Escrevi esse título h1 usando o echo</h1>";
                        echo '<p>"echo" é como um "Console.WriteLine()" no C#.</p>';
                        // Isso é um comentário em Linha.
                        # Isso também.
                        /*
                            Isso é um comentário em bloco.
                        */
                        $valor01 = 10;
                        $valor02 = 10.5;
                        $texto01 = "MeuTextoComeçouAqui";
                        
                        $soma = $valor01 + $valor02;
                        $juncao = $valor01 . $texto01; 

                        echo "<p>Fiz a soma entre $valor01 e $valor02, o resultado é [ $soma ]</p>";

                        echo "<p>Juntei um valor: $valor01 e um texto '$texto01', o resultado foi [ $juncao ]</p>";
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
