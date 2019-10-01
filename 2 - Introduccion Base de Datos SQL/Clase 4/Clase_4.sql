CREATE DATABASE Clase_4;

USE Clase_4;

DROP TABLE IF EXISTS clientes;
DROP TABLE IF EXISTS proveedores;

CREATE TABLE clientes(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(30),
    apellido VARCHAR(40),
    edad INT UNSIGNED NOT NULL
);

INSERT INTO clientes (nombre,apellido,edad) VALUES 
	("Hernan", "Franco", 22),
    ("Lautaro", "Julian", 23),
    ("Camila", "Lopez", 18);
    
CREATE TABLE proveedores(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(30),
    apellido VARCHAR(30),
    edad INT UNSIGNED NOT NULL
);

INSERT INTO proveedores (nombre,apellido,edad) VALUES 
	("Hernan", "Ezequiel", 20),
    ("Gabriela", "Guerra", 43),
    ("Yamil", "Gonzales", 38);
    
-- CONTEO TOTAL DE AMBAS TABLAS
SELECT COUNT(*)FROM clientes, proveedores;

-- Muestra los campos que tengan el mismo nombre en las dos tablas.
SELECT * FROM clientes, proveedores WHERE clientes.nombre = proveedores.nombre;

SELECT * FROM proveedores;
    