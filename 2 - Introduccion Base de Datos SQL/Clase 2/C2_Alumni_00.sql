CREATE DATABASE C1_Alumni_00;

USE C1_Alumni_00;

DROP DATABASE C1_Alumni_00;

DROP TABLE IF EXISTS articulos;

CREATE TABLE articulos(
	ID int(5) unsigned not null auto_increment,
    nombre varchar(15) not null,
    valor float(7,2) not null,
    stock int not null,
    PRIMARY KEY(ID)
);

INSERT INTO articulos (nombre, valor, stock) VALUES
	("Manzana", 45, 160),
    ("Pera", 34, 105),
    ("Banana", 56.20, 120),
    ("Naranja", 25.20, 30),
    ("Mandarina", 34.10, 40),
    ("Anana", 26.40, 50),
    ("Aji", 105.35, 15),
    ("Papa", 60.82, 200),
    ("Morron", 120.30, 40),
    ("Cebolla", 20, 45);
    
SELECT * FROM articulos;

--  artículos con precio mayor a 100
SELECT * FROM articulos WHERE valor > 100;

-- artículos con precio entre 20 y 40 (usar < y >)
SELECT * FROM articulos WHERE valor > 20 AND valor < 40;

-- artículos con precio entre 40 y 60 (usar BETWEEN)
SELECT * FROM articulos WHERE valor BETWEEN 40 AND 60;

-- artículos con precio = 20 y stock mayor a 30
SELECT * FROM articulos WHERE valor = 20 AND stock > 30;

-- artículos con precio (12,20,30) no usar IN
SELECT * FROM articulos WHERE valor NOT IN (12,20,30);

 -- artículos con precio (12,20,30) usar el IN
SELECT * FROM articulos WHERE valor IN(12,20,30);