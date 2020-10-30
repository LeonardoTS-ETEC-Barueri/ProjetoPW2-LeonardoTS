$(function(){   // Validações de LOGIN.

    $('#tLogin').submit(function(){ // $('#tLogin') é como o getElementById.
        var obj = this;     // JS atribuindo o elemento do id "tLogin" em "obj".
        var form = $(obj);  // Atribui a 'form' um conjunto JQUERY [?] - Contendo o obj que é o elemento <form> de id "tLogin" [?]
        var dados = new FormData(obj);  // Pega os dados que foram submetidos ao formulário.

        $.ajax({    // Início da validação AJAX.
            url: form.attr('action'),               // Endereço da página que receberá os dados do formulário.
            type: form.attr('method'),              // Método de navegação dos dados para página do Action.
            data: dados,                            // Dados retornados pelo tratamento na página que recebeu os dados do formulário.
            processData: false,
            cache: false,
            contentType: false,
            success: function(data){    // Função que será chamada caso a requisição na página do "action" do Form tiver sucesso (retorno).

                //if(data == "ErroUserLogin"){ // Se os dados retornarem a String "ErroUserLogin" exiba isso...
                //} 

                if(data == 'ErroUserLogin'){       // Se o Controller "validarLogin.php" retornar 'ErroUserLogin', dispare o método abaixo ↓.

                        Swal.fire({ // Utilização da extensão Swal para exibir modais bonitos na tela do usuário.
                            title: 'Erro ao preencher campos!',
                            text: 'Campo Usuário ou Email vazio!',
                            icon: 'error',
                            confirmButtonText: 'Okay, vou digitar meu e-mail',
                            heightAuto: false
                        }); // Fechamento da chamada do método fire() do Sweet Alert.

                }

                if(data == 'ErroSenhaLogin'){

                        Swal.fire({
                            title: 'Erro ao preencher campos!',
                            text: 'Campo Senha está vazio!',
                            icon: 'error',
                            confirmButtonText: 'Okay, vou digitar minha senha',
                            heightAuto: false
                        });

                }

                if(data == 'LoginInexistente'){

                    Swal.fire({
                        title: 'Usuário não encontrado!',
                        icon: 'error',
                        heightAuto: false
                    });

                }

                if(data == 'FalhaLogin'){

                    Swal.fire({
                        title: 'O login falhou, contacte o administrador.',
                        icon: 'error',
                        heightAuto: false
                    });

                }

                if(data == 'loginAdministrador'){
                    window.location.replace("../Administrador/");
                }

                if(data == 'loginFuncionario'){
                    window.location.replace("../Funcionario/");
                }

                if(data == 'loginCliente'){
                    window.location.replace("../Cliente/");
                }


            } // Fim da função do "success" no AJAX.

        }); // Fim da chamada do AJAX.

        return false;

    }); // Fim da Function() que será executada sobre o elemento de id "tLogin" - Nosso formulário.


}); // Fim JQuery Function() que é executada quando o HTML é carregado completamente.

$(function(){   // Validações CADASTRO

    $('#tCadastro').submit(function(){
        var obj = this;
        var form = $(obj);
        var dados = new FormData(obj);

        $.ajax({
            url: form.attr('action'),
            type: form.attr('method'),
            data: dados,
            processData: false,
            cache: false,
            contentType: false,
            success: function(data){

                if(data == 'NomeVazio'){

                        Swal.fire({
                            title: 'Erro ao preencher campos!',
                            text: 'Digite seu nome completo',
                            icon: 'error',
                            confirmButtonText: 'Okay, vou digitar meu nome completo',
                            heightAuto: false
                        });

                }

                if(data == 'EmailVazio'){

                        Swal.fire({
                            title: 'Erro ao preencher campos!',
                            text: 'Digite o seu E-mail',
                            icon: 'error',
                            confirmButtonText: 'Okay, vou digitar meu E-mail',
                            heightAuto: false
                        });

                }

                if(data == 'CPFVazio'){

                    Swal.fire({
                        title: 'Erro ao preencher campos!',
                        text: 'Digite o seu CPF',
                        icon: 'error',
                        confirmButtonText: 'Okay, vou digitar meu CPF',
                        heightAuto: false
                    });

                }

                if(data == 'CPFInvalido'){

                    Swal.fire({
                        title: 'Erro de dados invalidos!',
                        text: 'O CPF digitado não possui 11 números.',
                        icon: 'error',
                        confirmButtonText: 'Okay, vou corrigir meu CPF',
                        heightAuto: false
                    });

                }

                if(data == 'UsernameVazio'){

                    Swal.fire({
                        title: 'Erro ao preencher campos!',
                        text: 'Digite o seu nome de usuário.',
                        icon: 'error',
                        confirmButtonText: 'Okay, vou digitar meu nome de usuário',
                        heightAuto: false
                    });

                }

                if(data == 'SenhaVazia'){

                    Swal.fire({
                        title: 'Erro ao preencher campos!',
                        text: 'Digite a sua senha.',
                        icon: 'error',
                        confirmButtonText: 'Okay, vou digitar minha senha',
                        heightAuto: false
                    });

                }

                if(data == 'ConfirmacaoVazia'){

                    Swal.fire({
                        title: 'Erro ao preencher campos!',
                        text: 'Digite a sua confirmação de senha.',
                        icon: 'error',
                        confirmButtonText: 'Okay, vou digitar a confirmação da minha senha',
                        heightAuto: false
                    });

                }

                if(data == 'ConfirmacaoInvalida'){

                    Swal.fire({
                        title: 'Erro de dados inválidos!',
                        text: 'Verifique sua confirmação de senha.',
                        icon: 'error',
                        confirmButtonText: 'Okay, vou verificar minha confirmação de senha',
                        heightAuto: false
                    });

                }

                if(data == 'SucessoCadastro'){

                    Swal.fire({
                        title: 'Cadastro realizado com sucesso!',
                        icon: 'success',
                        showClass: {
                          popup: 'animate__animated animate__fadeInDown'
                        },
                        hideClass: {
                          popup: 'animate__animated animate__fadeOutUp'
                        },
                        heightAuto: false
                      });

                    $('#tCadastro').each(function(){
                        this.reset();
                    });

                }

            }

        });

        return false;

    });

});