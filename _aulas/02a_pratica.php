<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>

        <title>Aula 02 - Recaptulação da Lógica de Programação em PHP</title>

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
                    <h2>Data: 2020.08.25</h2>
                    <hr/>
                    
                    <?php 
                        echo "<p><strong>Estruturas Condicionais (if / else)</strong></p>";
                        $nome = "Marcelo123";

                        if($nome == "Marcelo"){
                            echo "<p>É o Marcelo!</p>";
                        }
                        else if ($nome == "Martelo"){
                            echo "<p>É o Martelo.</p>";
                        }
                        else if ($nome == "Marmelo"){
                            echo "<p>É o Marmelo.</p>";
                        }
                        else {
                            echo "<p>Não é nenhum deles.</p>";
                        }

                        echo "<hr/>";
                        echo "<p><strong>Estrutura de Escolha (switch)</strong></p>";
                        
                        $nome = "Marcelo";
                        
                        switch($nome){
                            case "Marcelo":
                                echo "É o Marcelo.";
                                break;
                            case "Martelo":
                                echo "É o Martelo.";
                                break;
                            case "Marmelo":
                                echo "É o Marmelo.";
                                break;
                            default:
                                echo "Não é nenhum deles";
                                break;
                        }

                        echo "<hr/>";
                        echo "<p><strong>Estrutura de Repetição Pré-Teste (for)</strong></p>";

                        $num = 7;

                        for($x = 1; $x <= 10; $x++){
                            echo $x . " x " . $num . " = " . $x * $num . "<br/>";
                        }

                        echo "<hr/>";
                        echo "<p><strong>Estrutura de Repetição Pré-Teste (while)</strong></p>";

                        $x = 1;
                        while($x < 11){
                            echo $x . " X " . $num . " = " . $x * $num . "<br/>";
                            $x++;
                        }

                        echo "<hr/>";
                        echo "<p><strong>Estrutura de Repetição Pós-Teste (do -> while)</strong></p>";

                        $x = 11;
                        echo "<p>Executa a primeira iteração independente do teste. Mesmo se o valor inicial for inválido. <br/>Útil quando precisamos exibir a mensagem independente do teste.</p>";

                        do{
                            echo $x . " X " . $num . " = " . $x * $num . "<br/>";
                        }while($x < 11);

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
