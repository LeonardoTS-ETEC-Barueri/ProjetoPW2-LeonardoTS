<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>

        <title>Página de Atividades Didáticas</title>

        <link type="text/css" rel="stylesheet" href="../_style/bootstrap.css"/>
        <link type="text/css" rel="stylesheet" href="../_style/estilo.css"/>
    </head>
    <body>
        <div class="container-fluid d-flex h-100 flex-column">

            <!-- Início da Barra de Navegação Responsiva -->
            <nav class="row navbar-expand-lg navbar-dark bg-dark justify-content-between">
                <a class="navbar-brand font-weight-bold p-2" href="../index.php"><img src="../_media/imagens/icons/02-atividadesLogo.svg" width="30" height="30" class="d-inline-block align-top mx-2" alt="Logo da página" title="HTML - CSS - JS">Programação Web 2</a>

                <button class="navbar-toggler my-auto mr-2" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item">
                            <a class="btn btn-outline-light py-0 m-1" href="../index.php">Home</a>
                        </li>
                        <li class="nav-item active"> <!-- Página atual -->
                            <a class="btn btn-light py-0 m-1" href="../view/paginaAtividades.php">Atividades</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-outline-light py-0 m-1" href="../view/paginaProjetos.php">Projetos Didáticos</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-outline-light py-0 m-1 disabled" href="#" tabindex="-1" aria-disabled="true">Projetos Pessoais</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Início do conteúdo principal -->
            <main class="row h-100 overflow-auto flex-grow-1 bg-img" style="background-image: url('../_media/imagens/backgrounds/02-atividadesBG.jpg');" >

                <div class="col p-2 m-2 rounded overflow-auto" style="background-color: rgba(255, 255, 255, 0.75);"> <!-- Container do conteúdo principal -->

                    <h1 class="lead font-weight-bold">Atividade 01 - Calculadora PHP</h1>
                    <h2 class="cool-h2">Data: 2020.08.27</h2>
                    <hr/>
                        
                    <form action="" method="POST">
                        <fieldset style="width: 30%;" class="border border-primary p-3"><legend class="font-weight-bold w-auto">Calculadora</legend>
                            <label for="tNum1">Número 1:&nbsp;</label><input type="text" id="tNum1" name="nNum1" placeholder="Digite o 1º número" required><br/>
                            <label for="tNum2">Número 2:&nbsp;</label><input type="text" id="tNum2" name="nNum2" placeholder="Digite o 2º número" required><br/>

                            <label for="tOperacao">Selecione a Operação</label>
                            <select id="tOperacao" name="nOperacao">
                                <option value="soma" selected>Soma</option>
                                <option value="sub">Subtração</option>                                    <option value="div">Divisão</option>
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

                    <a class="linkForte" href="../view/paginaAtividades.php"><p>Clique aqui para voltar.</p></a>

                </div> <!-- Fim do container do conteúdo principal -->
            </main>

            <footer class="row">
                <div class="col d-flex justify-content-end bg-dark">
                    <p class="p-2 m-0 text-white">Desenvolvido em 2020 por Leonardo T. Sanehira.</p>
                </div>
            </footer>

        </div>

        <script src="../node_modules/jquery/dist/jquery.js"></script>
        <script src="../node_modules/popper.js/dist/umd/popper.js"></script>
        <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
    </body>
</html>
