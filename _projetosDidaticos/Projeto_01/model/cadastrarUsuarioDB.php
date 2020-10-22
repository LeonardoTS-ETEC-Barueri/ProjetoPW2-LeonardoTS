<?php
    include_once "conexao.php";

    $sql = $conn->prepare("INSERT INTO tbl_usuario (nome, email, userName, senha, tipo, CPF)
        VALUES  (?,?,?,?,?,?)");
    $sql -> bind_param("ssssss", $nomeCad, $emailCad, $usernameCad, $senhaCad, $tipoCad, $cpfCad);
    $sql -> execute() or die("ErroBanco");

    echo "<p>Sucesso, usuário cadastrado</p>";

    $sql -> close();
    $conn -> close();

    exit();
?>