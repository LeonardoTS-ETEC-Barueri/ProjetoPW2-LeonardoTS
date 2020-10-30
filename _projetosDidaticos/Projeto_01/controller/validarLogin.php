<?php
    session_start();

    $userLogin = $_POST['nUser'];
    $senhaLogin = $_POST['nPass'];

    if ($userLogin == '') {
        exit('ErroUserLogin');  // A string deverá ser simples, pois será testada posteriormente.
    }

    if( empty($senhaLogin) ){
        exit('ErroSenhaLogin');
    }

    // echo '<p>Sucesso, usuário logado</p>'; // Essa validação passa a ocorrer em [ model/efetuarLoginModel.php ].

include_once '../model/efetuarLoginModel.php';   // A conexão ocorrerá dentro desse arquivo.
//include_once '../model/conexao.php';

?>