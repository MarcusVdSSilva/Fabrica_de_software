/*Criando Banco de dados e suas tabelas*/

create database Jogo;
use Jogo;

create table `professores`(
`id` int primary key not null auto_increment,
`username` varchar(50) not null unique,
`email` varchar(100) not null unique,
`password` varchar(50) not null
);

create table `alunos`(
`id` int primary key not null auto_increment,
`username` varchar(50) not null unique,
`email` varchar(100) not null unique,
`password` varchar(50) not null,
`pontuacao` varchar(100) not null
);

create table `turmas`(
`id` int primary key not null auto_increment,
`nome` varchar(50) not null unique,
`id_alunos` int,
foreign key (`id_alunos`) references `alunos`(`id`)
);

create table `professores_turma`(
`id_professores` int,
`id_turmas` int,
foreign key (`id_professores`) references `professores`(`id`),
foreign key (`id_turmas`) references `turmas`(`id`)
);