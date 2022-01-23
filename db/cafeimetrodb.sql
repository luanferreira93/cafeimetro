create database if not exists cafeimetro character set utf8 collate utf8_general_ci;

use cafeimetro;

create table tipos(
    id integer auto_increment primary key,
    nome varchar(25)
) engine=InnoDB;

create table cafe(
    id integer auto_increment primary key,
    nome varchar(25),
    descricao varchar(125),
    tipo_id integer,
    constraint foreign key (tipo_id) references tipos (id)
) engine=InnoDB;

create table consumo(
    id integer auto_increment primary key,
    data date,
    hora time,
    qtd integer,
    dia_semana varchar(7),
    preco decimal(5,2),
    cafe_id integer,
    constraint foreign key (cafe_id) references cafe (id)
)engine=InnoDB;