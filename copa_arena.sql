create database copa_arena;
use copa_arena;

create table jogadores(
id_jogador int primary key auto_increment not null,
Nickname varchar(50) not null,
Nome varchar(70) not null,
Email varchar(50),
Telefone varchar(20),
Usuario_discord varchar(30),
Cidade varchar(30),
Plataforma enum('PC','Console','Celular'),
Jogo enum('Valorant','League of Legends','EA FC')
);
