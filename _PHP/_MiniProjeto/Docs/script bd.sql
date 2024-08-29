create database t15_miniprojeto;
use t15_miniprojeto;

create table Fornecedor
(
	id_Fornecedor int not null auto_increment primary key ,
	nome_Fornecedor varchar(50) not null  ,
	cpfcnpj_Fornecedor varchar(20) not null unique ,
	email_Fornecedor varchar(50) not null  ,
	telefone_Fornecedor varchar(15) not null  ,
	logradouro_Fornecedor varchar(50) not null  ,
	numero_Fornecedor int not null  ,
	complemento_Fornecedor varchar(20) null  ,
	cep_Fornecedor char(9) not null  ,
	bairro_Fornecedor varchar(50) not null  ,
	cidade_Fornecedor varchar(50) not null  ,
	uf_Fornecedor char(2) not null  ,
	contato_Fornecedor varchar(50) not null  ,
	ramoatividade_Fornecedor varchar(50) not null  ,
	obs_Fornecedor varchar(255) null  ,
	status_Fornecedor varchar(30) not null  
);
select * from fornecedor;

create table Funcionario
(
	id_Funcionario int not null auto_increment primary key ,
	registro_Funcionario int not null unique ,
	nome_Funcionario varchar(50) not null  ,
	telefone_Funcionario varchar(15) not null  ,
	funcao_Funcionario varchar(30) not null  ,
	obs_Funcionario varchar(255) null  ,
	status_Funcionario varchar(30) not null  
);
select * from funcionario;

create table Usuario
(
	id_Usuario int not null auto_increment primary key ,
	nome_Usuario varchar(50) not null  ,
	login_Usuario varchar(50) not null unique ,
	senha_Usuario varchar(50) not null  ,
	email_Usuario varchar(50) not null unique ,
	telefone_Usuario varchar(15) not null  ,
	obs_Usuario varchar(255) null  ,
	status_Usuario varchar(30) not null  
);
select * from usuario;

create table Categoria
(
	id_Categoria int not null auto_increment primary key ,
	nome_Categoria varchar(50) not null unique ,
	descrição_Categoria varchar(255) not null  ,
	obs_Categoria varchar(255) null  ,
	status_Categoria varchar(30) not null  
);
select * from categoria;

create table Produto
(
	id_Produto int not null auto_increment primary key ,
	id_categoria_Produto int not null  ,
	nome_Produto varchar(50) not null unique ,
	qtde_Produto int not null  ,
	qtde_min_Produto int not null  ,
	descricao_Produto varchar(255) not null  ,
	precoc_Produto decimal(10,2) not null  ,
	precov_Produto decimal(10,2) not null  ,
	tipo_Produto varchar(30) not null  ,
	obs_Produto varchar(255) null  ,
	status_Produto varchar(30) not null,
    constraint FK_id_categoria_Produto foreign key (id_categoria_Produto) references categoria (id_categoria)
);
select * from produto;

create table movimentacao
(
	id_Movimentacao int not null auto_increment primary key ,
	id_funcionario_Movimentacao int not null  ,
	id_produto_Movimentacao int not null  ,
	id_usuario_Movimentacao int not null  ,
	qtde_Movimentacao int not null  ,
	datahora_Movimentacao timestamp not null  ,
	tipo_Movimentacao varchar(30) not null  ,
	obs_Movimentacao varchar(255) null  ,
	status_Movimentacao varchar(30) not null,
	constraint FK_id_funcionario_Movimentacao foreign key (id_funcionario_Movimentacao) references funcionario (id_funcionario),
    constraint FK_id_produto_Movimentacao foreign key (id_produto_Movimentacao) references produto (id_produto),
    constraint FK_id_usuario_Movimentacao foreign key (id_usuario_Movimentacao) references usuario (id_usuario)
);
select * from movimentacao;

insert into usuario 
(nome_Usuario,login_Usuario,senha_Usuario,email_Usuario,telefone_Usuario,obs_Usuario,status_Usuario)
values
('Administrador do Sistema','admin','123','admin@bigode.com.br','(11) 99999-9999','','ATIVO')

select * from usuario
update usuario set obs_usuario = 'sem observação' where id_usuario = 1

insert into usuario 
(nome_Usuario,login_Usuario,senha_Usuario,email_Usuario,telefone_Usuario,obs_Usuario,status_Usuario)
values
('Asdrubal','asdrubal','123','asdrubal@bigode.com.br','(11) 99999-9998','','ATIVO'),
('Benegudes','benegundes','123','benegundes@bigode.com.br','(11) 99999-9997','','ATIVO')


update usuario set obs_usuario = 'sem observação 2' where id_usuario = 1 or id_usuario = 3

delete from usuario where id_usuario = 3

insert into usuario 
(nome_Usuario,login_Usuario,senha_Usuario,email_Usuario,telefone_Usuario,obs_Usuario,status_Usuario)
values
('Benegudes','benegundes','123','benegundes@bigode.com.br','(11) 99999-9997','','ATIVO')


select * from usuario