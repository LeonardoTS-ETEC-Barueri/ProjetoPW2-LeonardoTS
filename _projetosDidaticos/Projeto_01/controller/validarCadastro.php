<?php

    $nomeCad = $_POST['nNome'];
    $emailCad = $_POST['nEmail'];
    $cpfCad = $_POST['nCPF'];
    $usernameCad = $_POST['nUser'];
    $senhaCad = $_POST['nPass'];
    $senhaCheckCad = $_POST['nPassCheck'];
    $tipoCad = "Cliente";

    if ( empty($nomeCad) ) {
        exit('NomeVazio');
    }

    if ( empty($emailCad) ) {
        exit('EmailVazio');
    }

    if ( empty($cpfCad) ) {
        exit('CPFVazio');
    } else if ( strlen($cpfCad) != 11 || !is_numeric($cpfCad)) {
        exit('CPFInvalido');
    }

    if ( empty($usernameCad) ) {
        exit('UsernameVazio');
    }

    if ( empty($senhaCad) ) {
        exit('SenhaVazia');
    }

    if ( empty($senhaCheckCad)) {
        exit('ConfirmacaoVazia');
    } elseif ($senhaCheckCad != $senhaCad){
        exit('ConfirmacaoInvalida');
    }

    include_once "../model/efetuarCadastroModel.php";

?>