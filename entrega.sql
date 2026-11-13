create database escola;
use escola;
create table alunos (
    IDalunos int auto_increment primary key,
    Nome_completo varchar(100),
    turma char (1),
    idade int,
    data_de_nascimento date);

insert into alunos (Nome_completo,turma,idade,data_de_nascimento)
values
('joão', 'A', 15, '2011-05-10'),
('Maria', 'B', 16, '2012-06-11'),
('José', 'C' 18, '2008-04-12');
select * from alunos