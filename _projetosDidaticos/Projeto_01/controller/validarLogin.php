<?php
    session_start();

    $userLogin = $_POST['nUser'];
    $senhaLogin = $_POST['nPass'];

    if ($userLogin == '') {
        exit('<p>Campo E-mail ou Usuário está vazio! <br>Digite novamente!</p>');
    }

    if( empty($senhaLogin) ){
        exit('<p>Campo Senha está vazio! <br>Digite novamente!</p>');
    }

    echo '<p>Sucesso, usuário logado</p>';

include_once '../model/efetuarLoginModel.php';   // A conexão ocorrerá dentro desse arquivo.
//include_once '../model/conexao.php';

?>