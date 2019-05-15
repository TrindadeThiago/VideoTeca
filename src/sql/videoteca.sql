create database videoteca;

use videoteca;

create table filme(
	id_filme int primary key auto_increment,
    titulo varchar(100) not null,
    duracao time not null,
    ano year not null,
    sinopse varchar(255) not null);
    
create table genero(
	id_genero int primary key auto_increment,
    genero varchar(60));
    
create table pais(
	id_pais int primary key auto_increment,
    pais varchar(60) not null);
    
create table diretor(
	id_diretor int primary key auto_increment,
    diretor varchar(100) not null);
    
create table estudio(
	id_estudio int primary key auto_increment,
    estudio varchar(100) not null);