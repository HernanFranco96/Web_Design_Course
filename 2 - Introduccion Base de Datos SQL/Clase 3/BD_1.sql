CREATE DATABASE bd_1;

USE bd_1;

DROP TABLE IF EXISTS Verduleria;

CREATE TABLE Verduleria(
	ID int(5) unsigned not null auto_increment primary key,
    nombre varchar(50) not null,
    precio float(5,2) not null,
    stock int(4) not null
);

-- RENOMBRAMOS LA TABLA
ALTER TABLE Verduleria RENAME verdu;

-- VOLVEMOS A RENOMBRAR Y PONER EL NOMBRE QUE HABIA ANTES
ALTER TABLE verdu RENAME Verduleria;

INSERT INTO Verduleria (nombre, precio, stock) VALUES 
	("Manzana", 25.5, 100),
    ("Pera", 30.5, 50),
    ("Naranja", 30, 70),
    ("Banana", 45.75, 25),
    ("Mandarina", 23, 47),
    ("Anana", 67.20, 40),
    ("Coco", 105.30, 25),
    ("Kiwi", 130, 10),
    ("Rucula", 30, 42),
    ("Lechuga", 35.50, 45);

SELECT ID,nombre,precio,(precio * 1.10) AS '+10%',stock FROM Verduleria;

-- BORRAMOS LA COLUMNA STOCK
ALTER TABLE Verduleria DROP COLUMN stock;

-- CREAMOS LA TABLA STOCK
ALTER TABLE Verduleria ADD stock int(4);

-- CAMBIAMOS EL NOMBRE DEL CAMPO
ALTER TABLE Verduleria CHANGE stock nuevostock int(4) not null;

-- CAMBIAMOS EL TIPO DE DATO DEL CAMPO
ALTER TABLE Verduleria MODIFY nuevostock int(4) not null;

INSERT INTO Verduleria (nombre, precio, nuevostock) VALUES 
	("Manzana", 25.5, 100),
    ("Pera", 30.5, 50),
    ("Naranja", 30, 70),
    ("Banana", 45.75, 25),
    ("Mandarina", 23, 47),
    ("Anana", 67.20, 40),
    ("Coco", 105.30, 25),
    ("Kiwi", 130, 10),
    ("Rucula", 30, 42),
    ("Lechuga", 35.50, 45);

-- Preparamos el SET para que nos deje copiar
SET SQL_SAFE_UPDATES = 0;

-- CAMBIAMOS EL NOMBRE A PAPAS EN EL CAMPO QUE TENGA UNA ID IGUAL A 2.
UPDATE Verduleria SET nombre = "Papas" WHERE ID = 2;

-- -------------------------------------------------------------------
SELECT ID, nombre, precio, nuevostock FROM Verduleria;

SELECT ID, nombre, precio FROM Verduleria;

-- MOSTRAMOS LA INFORMACION DE LA TABLA.
DESC Verduleria;
-- -------------------------------------------------------------------

SELECT * FROM Verduleria;

-- ----------------------------COUNT ()-------------------------------
-- MUESTRA LA CANTIDAD DE CAMPOS EN NUESTRA TABLA.
SELECT COUNT(*) FROM Verduleria;

-- CREAMOS UN ALIAS.
SELECT COUNT(*) AS 'Total de Registros' FROM Verduleria;
-- -------------------------------------------------------------------

-- --------------------------MAX () y MIN ()--------------------------
-- El producto mas caro lo mostramos con MAX.
SELECT MAX(precio) AS 'El producto mas caro' FROM Verduleria;

-- El producto mas bajo lo mostramos con MIN.
SELECT MIN(precio) AS 'El producto mas barato' FROM Verduleria;
-- -------------------------------------------------------------------

-- --------------------------SUM ()-----------------------------------
-- Mostramos el total de todos los precios.
SELECT SUM(precio) AS 'Total de los productos' FROM Verduleria;
-- -------------------------------------------------------------------

-- --------------------------AVG ()-----------------------------------
-- EL PROMEDIO DE TODOS LOS PRECIOS.
SELECT AVG(precio) AS Promedio FROM Verduleria;
-- -------------------------------------------------------------------

-- ---------------------------GROUP BY()------------------------------
-- Agrupa en cantidad segun el nombre
SELECT COUNT(*) FROM Verduleria GROUP BY nombre;
-- -------------------------------------------------------------------

-- --------------------HAVING ()--------------------------------------
-- CONSULTA NOMBRE Y PRECIO, EL CUAL MULTIPLICA X 2. Y MOSTRAMOS EL ALIAS QUE SUPERE 100. NO SOPORTA COMILLAS
SELECT nombre, (precio * 2) AS Preciox2 FROM Verduleria HAVING Preciox2 > 100;
-- -------------------------------------------------------------------

-- ORDENA LOS CAMPOS MANZANA SEGUN EL PRECIO
SELECT * FROM Verduleria WHERE nuevostock > 20 ORDER BY precio ASC; -- ASC ASCENDENTE 
SELECT * FROM Verduleria WHERE nuevostock > 20 ORDER BY precio DESC; -- DESC DESCENDENTE

-- REDONDEA EL PRECIO.
SELECT nombre, precio, ROUND(AVG(precio),2) AS 'Promedio' FROM Verduleria;
