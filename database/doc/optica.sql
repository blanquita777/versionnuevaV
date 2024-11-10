
---

### **`optica.sql`**
Este archivo contiene el script SQL para crear las tablas y insertar algunos datos de ejemplo.

```sql
-- Crear la base de datos
CREATE DATABASE IF NOT EXISTS optica;
USE optica;

-- Tabla de subcategorías
CREATE TABLE IF NOT EXISTS subcategorias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL
);

-- Insertar subcategorías
INSERT INTO subcategorias (nombre) VALUES
('Mujeres'),
('Hombres'),
('Unisex'),
('Niños');

-- Tabla de productos
CREATE TABLE IF NOT EXISTS productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    subcategoria_id INT,
    nombre VARCHAR(100) NOT NULL,
    marca VARCHAR(50) NOT NULL,
    precio DECIMAL(10,2) NOT NULL,
    cantidad INT NOT NULL,
    color VARCHAR(50) NOT NULL,
    imagen VARCHAR(100),
    FOREIGN KEY (subcategoria_id) REFERENCES subcategorias(id)
);

-- Tabla de carrito_items
CREATE TABLE IF NOT EXISTS carrito_items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    producto_id INT,
    cantidad INT NOT NULL,
    usuario_id INT,
    FOREIGN KEY (producto_id) REFERENCES productos(id)
);

-- Tabla de testimonios
CREATE TABLE IF NOT EXISTS testimonios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT,
    contenido TEXT NOT NULL,
    calificacion INT NOT NULL,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id)
);

CREATE TABLE IF NOT EXISTS subcategorias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    categoria_id INT,  -- Añadir columna para la relación con la tabla categorias
    nombre VARCHAR(50) NOT NULL,
    FOREIGN KEY (categoria_id) REFERENCES categorias(id) ON DELETE CASCADE  -- Añadir la restricción de clave foránea
);



-- Insertar productos para Lentes de Sol
INSERT INTO productos (subcategoria_id, nombre, marca, precio, cantidad, color, imagen) VALUES
(105, 'Lentes Sol Mujeres Ray-Ban', 'Ray-Ban', 150.00, 50, 'Negro', 'lentes_sol_mujeres_rayban.jpg'),
(106, 'Lentes Sol Hombres Oakley', 'Oakley', 180.00, 40, 'Azul', 'lentes_sol_hombres_oakley.jpg'),
(107, 'Lentes Sol Unisex Nike', 'Nike', 160.00, 60, 'Rojo', 'lentes_sol_unisex_nike.jpg'),
(108, 'Lentes Sol Niños Fisher Price', 'Fisher Price', 100.00, 30, 'Verde', 'lentes_sol_ninos_fisher.jpg');

-- Insertar productos para Lentes Oftalmológicos
INSERT INTO productos (subcategoria_id, nombre, marca, precio, cantidad, color, imagen) VALUES
(109, 'Lentes Oftalmológicos Clásicos Gucci', 'Gucci', 200.00, 25, 'Marrón', 'lentes_oftalmologicos_clasicos.jpg'),
(110, 'Lentes Oftalmológicos Modernos Ray-Ban', 'Ray-Ban', 250.00, 30, 'Negro', 'lentes_oftalmologicos_modernos.jpg'),
(111, 'Lentes Oftalmológicos Unisex Tom Ford', 'Tom Ford', 220.00, 35, 'Gris', 'lentes_oftalmologicos_unisex.jpg'),
(112, 'Lentes Oftalmológicos Niños Fisher Price', 'Fisher Price', 180.00, 40, 'Rosa', 'lentes_oftalmologicos_ninos.jpg');

-- Insertar productos para Lentes de Contacto
INSERT INTO productos (subcategoria_id, nombre, marca, precio, cantidad, color, imagen) VALUES
(113, 'Lentes de Contacto Freshlook Alcon', 'Alcon', 60.00, 100, 'Verde', 'lentes_contacto_freshlook.jpg'),
(114, 'Lentes de Contacto Air Optix Alcon', 'Alcon', 75.00, 120, 'Azul', 'lentes_contacto_air_optix.jpg'),
(115, 'Lentes de Contacto Freshlook Colorblends Alcon', 'Alcon', 65.00, 110, 'Azul', 'lentes_contacto_freshlook_colorblends.jpg'),
(116, 'Lentes de Contacto Niños Freshlook', 'Freshlook', 50.00, 90, 'Azul', 'lentes_contacto_ninos.jpg');
