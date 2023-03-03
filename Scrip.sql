
CREATE DATABASE db_chashlock;

create table usuario (
	id int not null auto_increment primary key,
	email varchar(100) not null,
	senha varchar(200) not null
);