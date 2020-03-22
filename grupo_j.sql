CREATE DATABASE grupo_j;

CREATE USER "iic3142" IDENTIFIED BY "iic3142";

GRANT SELECT, INSERT ON grupo_j.* TO 'iic3142'@'%';

USE grupo_j;

CREATE TABLE flora (
    comentario varchar(255)
);

INSERT INTO flora
VALUES ("Hola Mundo");


