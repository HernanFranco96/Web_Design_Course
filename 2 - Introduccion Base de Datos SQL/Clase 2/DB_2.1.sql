CREATE DATABASE clase_2_1;

-- Elegimos con cual base de datos trabajar.
USE clase_2_1;

-- Desactivamos el seguro que nos permite borrar y modificar datos.
SET SQL_SAFE_UPDATES = 0; 

-- Mostramos todas las bases de datos.
SHOW DATABASES;

-- Eliminamos la base de datos. 
DROP DATABASE clase_2_1;

CREATE DATABASE productos;

USE productos;

-- Si existe la tabla, la borramos.
DROP TABLE  IF EXISTS datos;

-- Creamos la tabla
CREATE TABLE datos(
	id int(5) unsigned not null, -- auto increment sirve para auto incrementar el id.
    descripcion varchar(50) not null,
    marca varchar(20) not null,
    precio float(7,2) not null,
    stock int not null,
    PRIMARY KEY(id) -- Indicamos que el valor ID sera la PRIMARY KEY
);

-- Insertamos datos a la tabla
INSERT INTO datos(id, descripcion, marca, precio, stock) VALUES 
	(1, '16GB', 'Motorola', 15500, 20),
    (2, '32GB', 'Samsumg', 21205, 5),
    (3, '6GB', 'Samsumg', 6000, 15),
    (4, '8GB', 'SmarTPhone', 12300, 20),
    (5, '6GB', 'Motorola', 5630, 10),
    (6, '4GB', 'LG', 3500, 13),
    (7, '16GB', 'Huawei', 14500, 20),
    (8, '16GB', 'Iphone', 25000, 12),
    (9, '32GB', 'Iphone', 45630, 30),
    (10, '6GB', 'LG', 7800, 4),
    (11, '4GB', 'Huawei', 4500, 5),
	(12, '12GB', 'LG', 10500, 35),
	(13, '16GB', 'Samsumg', 10500, 42),
    (14, '8GB', 'Iphone', 9000, 20),
    (15, '16GB', 'LG', 17200, 13);
/**
	AND = Y
	OR = O
	IS NOT = Distinto
*/

-- Esto es un reporte
SELECT * FROM datos;

-- Precios igual a 14500.
SELECT * FROM datos WHERE precio = 14500;

-- Precios mayores a 10000 y menores a 20000.
SELECT * FROM datos WHERE precio > 10000 and precio < 20000;

-- Marcas Samsumg o Iphone.
SELECT * FROM datos WHERE marca LIKE 'Samsumg' OR marca LIKE 'Iphone';

-- Todas las marcas que contengan los que esta entre medio de los porcentajes.
SELECT * FROM datos WHERE marca LIKE '%Iph%';

-- Marcas que sean Iphone.
SELECT * FROM datos WHERE marca LIKE 'Iphone';

SELECT marca FROM datos WHERE descripcion LIKE '16GB' AND precio > 10000;

-- Todos los ID.
SELECT id FROM datos;

-- Todos los datos.
SELECT id, descripcion, marca, precio, stock FROM datos;

-- --------------------------------------- BETWEEN -----------------------------------------

-- Celulares entre 10000 y 16000. BETWEEN muestra rangos.
SELECT * FROM datos WHERE precio BETWEEN 10000 AND 13000;

-- Celulares que no esten entre 10000 y 16000. BETWEEN muestra rangos.
SELECT * FROM datos WHERE precio NOT BETWEEN 10000 AND 13000;

-- ----------------------------------------- IN ---------------------------------------------

-- Reporta todos los elementos con los datos marcados entre parentesis.
SELECT * FROM datos WHERE marca IN ('Iphone','LG');

-- Reporta todos los elementos con los datos que no esten marcados entre parentesis.
SELECT * FROM datos WHERE marca NOT IN ('Iphone','LG');

-- -------------------------------------- LIMIT ----------------------------------------------

-- Reportamos la cantidad de registros que queremos con LIMIT
SELECT * FROM datos LIMIT 4;

SELECT * FROM datos LIMIT 2, 6;

-- -------------------------------------- OFFSET ----------------------------------------------

-- Nos reporta despues de los 3 primeros registros, los siguientes 3 registros.
SELECT * FROM datos LIMIT 3 OFFSET 3;

-- ----------------------------------------- AS ------------------------------------------------

-- Mostramos el precio con un 10% mas. AS crea un ALIAS el cual mostrara lo siguiente.
SELECT id, descripcion, precio,(precio * 1.10) AS '+10%' FROM datos;

-- ---------------------------------------- DELETE --------------------------------------------

-- Eliminamos el registro con el ID 2
DELETE FROM datos WHERE id = 3;

SELECT * FROM datos;

-- ---------------------------------------- UPDATE ---------------------------------------------

-- Seteame marca Samsumg donde alla marca Huawei
UPDATE datos SET marca = 'Samsumg' WHERE marca = 'Huawei';

