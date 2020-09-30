<?php

    $emailLogin = $_POST['nUser'];
    $senhaLogin = $_POST['nPass'];

    if ($emailLogin == '') {
        exit('<p>Campo E-mail ou Usuário está vazio! <br>Digite novamente!</p>');
    }

    if( empty($senhaLogin) ){
        exit('<p>Campo Senha está vazio! <br>Digite novamente!</p>');
    }

    echo '<p>Sucesso, usuário logado</p>';




?>