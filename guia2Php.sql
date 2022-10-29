create database guia2;
use guia2;
create table productos(
prod_id int(5) primary key auto_increment,
prod_descripcion varchar(60),
prod_precio float(5,2)
);
select *from productos;
insert into productos (prod_descripcion,prod_precio) values ("Celular",100.0);
select * from productos where prod_descripcion="Pc Gamer Ultima generación";
select * from productos where prod_id=2;
update productos set prod_descripcion='Iphone', prod_precio=150.0 where prod_id=1;

create table roles(
rol_id int(2) primary key auto_increment,
rol_descripcion varchar(30)
);
select *from roles;
drop table roles;
insert into roles(rol_descripcion) values ("profesor");

create table usuarios(
usu_id int(3) primary key auto_increment,
usu_nombres varchar(40),
usu_apellidos varchar(40),
usu_email varchar(60),
usu_contrasena varchar(20),
rol_id int(2)
);
select * from usuarios where usu_email='hiuhiu'and usu_contrasena='password';