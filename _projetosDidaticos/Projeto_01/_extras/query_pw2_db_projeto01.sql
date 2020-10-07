CREATE DATABASE pw2_db_projeto01;

USE pw2_db_projeto01;

CREATE TABLE tbl_usuario (
	idUsuario INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,				# NOT NULL significa que é um campo obrigatório.
    email VARCHAR(100) NOT NULL UNIQUE,		# Usamos UNIQUE para que a tabela não registre E-mails, Usernames e CPFs repetidos.
    userName VARCHAR(100) NOT NULL UNIQUE,	# É uma CONSTRAINT, uma Restrição.
    senha VARCHAR(100) NOT NULL,
	tipo VARCHAR(100) NOT NULL,			# É o tipo de usuário: Cliente? Administrador?...
    ativo BOOL NOT NULL DEFAULT true,		# Não é desejável excluir um usuário, mas sim inativá-lo.
    CPF VARCHAR(14) NOT NULL UNIQUE			# Se o usuário tentar logar, após ele "excluir" o perfil, ele será barrado,
											# mas os dados permanecerão na nossa base, pois ele pode ter interagido com diversas outras tabelas.
);

INSERT INTO tbl_usuario (idUsuario, nome, email, userName, senha, tipo, ativo, CPF) VALUES
(DEFAULT, 'Alfino Admin', 'alfino.admin@hotmail.com', 'Admin', 'adm123', 'Administrador', DEFAULT, '12345678912'),
(DEFAULT, 'Billy Bob', 'billybob@hotmail.com', 'BillyBoy', 'Billy2000', 'Cliente', DEFAULT, '12345678911');

SELECT * FROM tbl_usuario;