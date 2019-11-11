create database instagram;
use instagram;
create table posts (
	id int primary key auto_increment,
    img varchar (500),
    descricao varchar (1000)
);