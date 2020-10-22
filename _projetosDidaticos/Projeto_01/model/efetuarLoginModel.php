<?php

include_once 'conexao.php';

$sql = $conn -> prepare("SELECT * FROM tbl_usuario WHERE
(email = ? OR userName = ?) AND senha = ? AND ativo = true");

$sql -> bind_param("sss", $userLogin, $userLogin, $senhaLogin);

$sql -> execute();

$resultado = $sql -> get_result(); // Pegamos o resultado pq SELECT retorna resultados, INSERT não.

$linha = $resultado -> fetch_assoc();   // Retorna um Array contendo cada CAMPO da linha recebida em resultado. O índice será o nome do campo chave.
                                        // Nesse caso, temos apenas uma linha de resultado, ou nenhuma. Então não nos preocupamos em armazenar o array de forma ordenada na variável "linha".

$sql -> close();    // Aqui nos garantimos o fechamento das conexões.
$conn -> close();

if(empty($linha)){  // Se "linha" voltou vazia, é pq não achamos nada.
    echo "<p>Erro: Falha no Login</p>";
    die();
} else {
    $_SESSION['idUsuario'] = $linha['idUsuario'];   // A session é uma MATRIZ DE ASSOCIAÇÃO. Deve ser correspondente com os campos da tabela da base de dados.
    $_SESSION['login'] = true;
    $_SESSION['nome'] = $linha['nome'];             // É uma matriz, cujos índices são nomes, invés de posições numéricas.
    $_SESSION['userName'] = $linha['userName'];     
    $_SESSION['CPF'] = $linha['CPF'];               // Basicamente estamos armazenando nossos campos em Variáveis de Sessão.
    $_SESSION['tipo'] = $linha['tipo'];
    $_SESSION['ativo'] = $linha['ativo'];       // Atenção: Para usar a Sessão, devemos iniciar a sessão no INÍCIO do arquivo de Controller onde esse Model será chamado.

    switch($linha['tipo']){ // Esse switch jogará o usuário para a tela correspondente ao tipo de usuário que ele é.
        case "Administrador":
            echo "<p>Sucesso! Logado como [Administrador]</p>";
            break;
        case "Funcionario":
            echo "<p>Sucesso! Logado como [Funcionário]</p>";
            break;
        case "Cliente":
            echo "<p>Sucesso! Logado como [Cliente]</p>";
            break;
        default:
            echo "<p>Erro: Login falhou.</p>";
            exit();
    }

}

?>