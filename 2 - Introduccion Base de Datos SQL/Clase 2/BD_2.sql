CREATE DATABASE clase_2;

USE clase_2;

DROP TABLE IF EXISTS persona;

CREATE TABLE persona(
	id int,
	nombre varchar(10),
	apellido varchar(10),
	edad int(2),
	dni int(9)
);

/** Ingresamos datos a la tabla persona */
INSERT INTO persona(id,nombre,apellido,edad,dni) VALUE (12,"Hernan","Franco",22,39664999);

/** Mostramos todos los elementos de la tabla persona. */
SELECT * FROM persona;