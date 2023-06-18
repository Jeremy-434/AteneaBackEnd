CREATE DATABASE mi_proyecto;
USE mi_proyecto;
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255),
    apellido VARCHAR(255),
    cedula BIGINT
);
INSERT INTO usuarios (nombre, apellido, cedula)
VALUES
    ('Andr�s', 'Pineda', 100000000),
    ('Camilo', 'Guti�rrez', 200000000),
    ('Jos�', 'Pardo', 300000000),
    ('Nicol�s', 'P�rez', 300000000),
    ('Laura', 'Espitia', 400000000);
