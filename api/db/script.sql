create database if not exists johnny_teste;

use johnny_teste; 

create table if not EXISTS PRODUTOS(
    id INT(11) auto_increment,
    nome VARCHAR(255),
    preco DECIMAL(10,2),
    PRIMARY KEY(id)
);

insert into PRODUTOS VALUES(0, 'Produto 1', 1500);
insert into PRODUTOS VALUES(0, 'Produto 2', 700);
