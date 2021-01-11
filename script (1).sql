
CREATE DATABASE projeto;
USE projeto;

CREATE TABLE produto (
idproduto integer NOT NULL auto_increment,
nomeproduto varchar(40) NOT NULL,
descricao varchar(100) NOT NULL,
categ varchar(20) NOT NULL,
preco DOUBLE,
estoque_minino INT(11),
estoque_maximo INT(11),
quant_estoque INTEGER,
PRIMARY KEY (idproduto)
);

CREATE TABLE filmes (
idfilme integer NOT NULL auto_increment,
nomecategoria varchar(100) NOT NULL,
descricao varchar(100) NOT NULL,
PRIMARY KEY (idfilme)
);

CREATE TABLE series (
idserie integer NOT NULL auto_increment,
nomecateg varchar(100) NOT NULL,
descric varchar(100) NOT NULL,
PRIMARY KEY (idserie)
);

CREATE TABLE usuario(
id_usuario integer NOT NULL auto_increment,
cpf BIGINT (20) not null,
nomeusuario varchar (60) not null,
email varchar (60) not null,
senha varchar (12) not null,
datadenascimento DATE not null,
sexo char (1) not null,
tipousuario varchar(10) not null,
logradouro varchar (60) not null,
numero varchar (7) not null,
complemento varchar (60) not null,
bairro varchar (60) not null,
cidade varchar (60) not null,
cep varchar (60) not null, 
primary key(id_usuario)
);