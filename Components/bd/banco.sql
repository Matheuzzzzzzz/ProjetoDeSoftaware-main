create database ProjetoSoftware;
use ProjetoSoftware;
create table cadastro(
id int primary key not null auto_increment,
nome varchar(100) not null,
email varchar(100) not null,
senha varchar(50) not null,
cpf varchar(14) not null,
rua varchar(100) not null,
numero int not null,
bairro varchar(100) not null,
cidade varchar(100) not null
)engine=InnoDB;
create table cadastroespaco(
id int primary key not null auto_increment,
nomeespaco varchar(100) not null,
nomelocal varchar(100) not null,
tipo varchar(50) not null,
descricao varchar(200) not null,
rua varchar(100) not null,
numero int not null,
bairro varchar(100) not null,
cidade varchar(100) not null,
imagem blob not null
)engine=InnoDB;