CREATE DATABASE IF NOT EXISTS prueba;
USE prueba;

CREATE TABLE producto(
  id_producto INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  Clave_producto CHAR(4) UNIQUE,
  Nombre VARCHAR(50) NOT NULL,
  Precio FLOAT
);

DROP PROCEDURE IF EXISTS ´sp_insert_product´;
DELIMITER //
CREATE PROCEDURE ´sp_insert_product´(keyProduct CHAR(4),nameProduct VARCHAR(50),price FLOAT)
BEGIN 
  SET @bool = (SELECT count(1) FROM producto WHERE Clave_producto= keyProduct);
  IF @bool = 0 THEN
    INSERT INTO producto(Clave_producto, Nombre, Precio) VALUES(keyProduct, nameProduct, price);
    SELECT "Producto insertado con exito" AS mensaje;
  ELSE 
    SELECT "No es posible realizar el prestamo" AS mensaje_error;
  END IF;
END//
CREATE PROCEDURE 'sp_get_data'()
BEGIN
  SELECT * FROM producto ORDER BY id_producto DES;
END//
DELIMITER ;