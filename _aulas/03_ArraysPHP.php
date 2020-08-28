<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>

        <title>Aula 03 - Arrays em PHP</title>

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
                    <h1>Aula 03 - Usando Arrays em PHP</h1>
                    <h2>Data: 2020.08.27</h2>
                    <hr/>

                    <form action="" method="POST">
                        <label for="idRegular">Remetente:</label>
                            <input type="text" id="idRegular" name="regular">
                        <input type="submit" name="acao" value="Enviar"/>
                    </form>

                    <?php 
                        $regular = "";
                        if (isset($_POST['acao']) AND $_POST['acao'] == 'Enviar'){
                            $regular = $_POST['regular'];
                        }

                        echo "<p>O remetente é: <strong>$regular</strong></p>";

                        echo '<code>';
                        echo 'if (isset($_POST['."'".'acao'."'".']) AND $_POST['."'".'acao'."'"."] == "."'".'Enviar'."'".'){';
                        echo '<br/>$regular = $_POST['."'".'regular'."'".'];';
                        echo '<br/>}';
                        echo '</code>';

                        $estados[0] = "São Paulo";
                        $estados[1] = "Rio de Janeiro";
                        $estados[2] = "Bahia";
                        $estados["ES"] = "Espírito Santo";
                        $estados["MA"] = "Maranhão";
                        $estados["num"] = 120;

                        echo "<pre>";
                        print_r ($estados);
                        echo "</pre>";

                        echo '<p>Exibição de $estados[1]: <strong>'.$estados[1]."</strong><br/>";
                        echo 'Exibição de $estados["num"]: <strong>'.$estados["num"]."</strong></p>";

                        $materia = Array (
                            "TOO" => "Técnicas de O.O",
                            "DSI" => "Desenvolvimento",
                            "TPI-II" => "Técnicas de Programação internet"
                        );

                        echo "<pre>";
                        print_r ($materia);
                        echo "</pre>";

                        echo "<hr/>";
                    ?>

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
