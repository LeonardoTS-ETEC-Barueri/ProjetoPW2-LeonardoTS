<?php

    $nomeCad = $_POST['nNome'];
    $emailCad = $_POST['nEmail'];
    $cpfCad = $_POST['nCPF'];
    $usernameCad = $_POST['nUser'];
    $senhaCad = $_POST['nPass'];
    $senhaCheckCad = $_POST['nPassCheck'];
    $tipoCad = "Cliente";

    if ( empty($nomeCad) ) {
        exit('<p>Campo Nome Completo está vazio! <br>Digite novamente!</p>');
    }

    if ( empty($emailCad) ) {
        exit('<p>Campo E-mail está vazio! <br>Digite novamente!</p>');
    }

    if ( empty($cpfCad) ) {
        exit('<p>Campo CPF está vazio! <br>Digite novamente!</p>');
    } else if ( strlen($cpfCad) != 11) {
        exit('<p>Campo CPF inválido: Possui mais que 11 caracteres! <br>Digite novamente!</p>');
    }

    if ( empty($usernameCad) ) {
        exit('<p>Campo Nome de Usuário está vazio! <br>Digite novamente!</p>');
    }

    if ( empty($senhaCad) ) {
        exit('<p>Campo Senha está vazio! <br>Digite novamente!</p>');
    }

    if ( empty($senhaCheckCad)) {
        exit('<p>Campo de Verificação de Senha está vazio! <br>Digite novamente!</p>');
    } elseif ($senhaCheckCad != $senhaCad){
        exit('<p>Você não digitou a mesma senha na Verificação de Senha! <br>Digite novamente!</p>');
    }

    include_once "../model/cadastrarUsuarioDB.php";

?>