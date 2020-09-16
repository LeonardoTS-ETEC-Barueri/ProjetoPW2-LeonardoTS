<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>

        <title>Tela de Login</title>

        <link type="text/css" rel="stylesheet" href="../../../_style/bootstrap.css"/>
        <link type="text/css" rel="stylesheet" href="../../../_style/estilo.css"/>
        <link type="text/css" rel="stylesheet" href="../estilo/estiloProj.css"/>

    </head>
    <body>
        <div class="container-fluid d-flex h-100 flex-column">

            <nav class="row navbar navbar-dark bg-dark">
                <a class="navbar-brand font-weight-bold" href="../../../index.php">Projeto PW2</a>
            </nav>

            <main class="row h-100 overflow-auto flex-grow-1">

                <div class="col bg-light bg-img">
                    
                    <div class="d-flex h-100 justify-content-center align-items-center">
                        <div class="col-6 jumbotron" style="background-color: rgba(255,255,255,0.8);">

                            <h1 class="display-4 text-center">Login</h1>

                            <form action="" method="POST" id="login">
                                <div class="form-row">
                                    <div class="col-lg-6 my-3 mx-auto">
                                        <input class="form-control form-control-lg" name="nUser" id="tUser" type="text" placeholder="Nome de usuário"/>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-lg-6 my-3 mx-auto">
                                        <input class="form-control form-control-lg" name="nPass" id="tPass" type="password" placeholder="Senha"/>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-lg-6 my-3 mx-auto">
                                        <input class="form-control form-control-lg btn-success" name="nBtnEntrar" id="tBtnEntrar" type="submit" value="Entrar"/>
                                    </div>
                                </div>
                                <div class="form-row p-0">
                                    <div class="col-lg-6 p-0 my-0 mx-auto">
                                        <a class="nav-link lead" href="#">Esqueci minha senha.</a>
                                    </div>
                                </div>
                            </form>
                        
                        </div>
                    </div>

                    <?php

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
