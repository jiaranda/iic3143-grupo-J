CREATE DATABASE grupo_j;

CREATE USER "iic3143" IDENTIFIED BY "iic3143";

GRANT SELECT, INSERT ON grupo_j.* TO 'iic3143'@'%';

USE grupo_j;

CREATE TABLE flora (
    comentario varchar(255)
);

INSERT INTO flora
VALUES ("Hola Mundo");


