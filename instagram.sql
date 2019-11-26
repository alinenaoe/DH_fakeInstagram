-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Nov-2019 às 16:26
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


-- Banco de dados: `instagram`

create database instagram;
use instagram;

-- Estrutura da tabela `posts`

CREATE TABLE posts (
	id int(11) primary key auto_increment not null,
    img varchar(500) not null,
    postText varchar (1000) not null
); 

insert into posts(user_id) values (6) where posts(id)=1;
delete from posts where id=5;

-- Estrutura da tabela `users`
CREATE TABLE users (
	id int (11) primary key auto_increment not null,
	username varchar(100) not null,
	useremail varchar (100) not null,
	userpassword varchar(100) not null
);
 alter table users add profileimg varchar(500) not null;
 alter table users modify username varchar(100) not null unique;
 
 
-- Extraindo dados da tabela `posts`
select * from posts;

-- Extraindo dados da tabela `users`
select * from users;	

-- Índices para tabelas despejadas

-- Índices para tabela `posts`

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
