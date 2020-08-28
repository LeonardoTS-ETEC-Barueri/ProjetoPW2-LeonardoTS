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
                    <h1>Atividade 01 - Calculadora PHP</h1>
                    <h2>Data: 2020.08.27</h2>
                    <hr/>
                    
                    <form action="" method="POST">
                        <fieldset style="width: 30%;" class="border border-primary p-3"><legend class="font-weight-bold w-auto">Calculadora</legend>
                            <label for="tNum1">Número 1:&nbsp;</label><input type="text" id="tNum1" name="nNum1" placeholder="Digite o 1º número" required><br/>
                            <label for="tNum2">Número 2:&nbsp;</label><input type="text" id="tNum2" name="nNum2" placeholder="Digite o 2º número" required><br/>

                            <label for="tOperacao">Selecione a Operação</label>
                            <select id="tOperacao" name="nOperacao">
                                <option value="soma" selected>Soma</option>
                                <option value="sub">Subtração</option>
                                <option value="div">Divisão</option>
                                <option value="mult">Multiplicação</option>
                                <option value="resto">Resto da Divisão</option>
                            </select><br/>
                            <div class="d-flex justify-content-center">
                                <input class="btn btn-dark" type="submit" name="nEnviar" value="Calcular"/>
                            </div>
                        </fieldset>
                    </form>

                    <?php 

                        // Vars 
                        $n1 = (isset($_POST['nEnviar']) AND ($_POST['nEnviar'] == "Calcular")) ? $_POST['nNum1'] : 0;
                        $n2 = (isset($_POST['nEnviar']) AND ($_POST['nEnviar'] == "Calcular")) ? $_POST['nNum2'] : 0;
                        $operacao = (isset($_POST['nEnviar']) AND ($_POST['nEnviar'] == "Calcular")) ? $_POST['nOperacao'] : null;
                            // Usamos essa condição pois não estamos enviando os dados do form com o [action=""].
                        $res = 0;

                        // Tratamento dos dados.
                        switch ($operacao){
                            case "soma":
                                $operacao = "da <strong>Soma</strong> de $n1 e $n2 ";
                                $res = $n1 + $n2;
                                break;
                            case "sub":
                                $operacao = "da <strong>Subtração</strong> de $n1 e $n2 ";
                                $res = $n1 - $n2;
                                break;
                            case "div":
                                $operacao = "da <strong>Divisão</strong> de $n1 e $n2 ";
                                $res = $n1 / $n2;
                                break;
                            case "mult":
                                $operacao = "da <strong>Multiplicação</strong> de $n1 e $n2 ";
                                $res = $n1 * $n2;
                                break;
                            case "resto":
                                $operacao = "do <strong>Resto da Divisão</strong> de $n1 e $n2 ";
                                $res = $n1 % $n2;
                                break;
                            default:
                                $operacao = "da operação";
                                break;
                        }

                        //Exibição
                        echo "<br/><p>O resultado $operacao é: <span class='font-weight-bolder'>$res</span></p>";
                        

                    ?>

                    <p class="linkForte">• <a href="../index.php">Voltar</a></p>
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
