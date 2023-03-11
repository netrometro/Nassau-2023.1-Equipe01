
CREATE DATABASE db_chashlock;

create table usuario (
	id int not null auto_increment primary key,
	email varchar(100) not null,
	senha varchar(200) not null
);

create table titulos_receber (
	id int not null auto_increment primary key,
	id_cliente int not null,
	valor float,
	pago float,
	saldo float,
	data_emissao date,
	data_pagamento date
);