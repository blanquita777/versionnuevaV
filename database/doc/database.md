# Documentación de la Base de Datos - Proyecto Óptica

## Descripción
Este proyecto está basado en una tienda en línea para una óptica, utilizando Laravel y una base de datos MySQL. La base de datos gestiona productos, subcategorías, carritos de compra, testimonios, y más.

## Tablas de la Base de Datos

### 1. **subcategorias**
Esta tabla contiene las subcategorías de productos disponibles en la óptica.

| Campo         | Tipo       | Descripción                         |
|---------------|------------|-------------------------------------|
| `id`          | INT        | Identificador único de la subcategoría (PK) |
| `nombre`      | VARCHAR(50)| Nombre de la subcategoría (e.g., Mujeres, Hombres, Unisex, Niños) |

**Ejemplo de subcategorías:**
- Mujeres
- Hombres
- Unisex
- Niños

---

### 2. **productos**
Contiene la información de los productos disponibles en la óptica.

| Campo          | Tipo         | Descripción                                   |
|----------------|--------------|-----------------------------------------------|
| `id`           | INT          | Identificador único del producto (PK)         |
| `subcategoria_id` | INT       | Relación con la tabla `subcategorias` (FK)    |
| `nombre`       | VARCHAR(100) | Nombre del producto                           |
| `marca`        | VARCHAR(50)  | Marca del producto                            |
| `precio`       | DECIMAL(10,2)| Precio del producto                           |
| `cantidad`     | INT          | Cantidad disponible del producto              |
| `color`        | VARCHAR(50)  | Color del producto                            |
| `imagen`       | VARCHAR(100) | Nombre del archivo de imagen del producto     |

**Relaciones:**
- `subcategoria_id` es una clave foránea que hace referencia a la tabla `subcategorias`.

---

### 3. **carrito_items**
Gestiona los productos añadidos al carrito de compras.

| Campo         | Tipo       | Descripción                                       |
|---------------|------------|---------------------------------------------------|
| `id`          | INT        | Identificador único (PK)                          |
| `producto_id` | INT        | Relación con la tabla `productos` (FK)            |
| `cantidad`    | INT        | Cantidad de productos en el carrito               |
| `usuario_id`  | INT        | Relación con la tabla `usuarios` (FK), si aplica |

**Relaciones:**
- `producto_id` es una clave foránea que hace referencia a la tabla `productos`.

---

### 4. **testimonios**
Contiene los testimonios dejados por los clientes.

| Campo         | Tipo       | Descripción                             |
|---------------|------------|-----------------------------------------|
| `id`          | INT        | Identificador único del testimonio (PK) |
| `usuario_id`  | INT        | Relación con la tabla `usuarios` (FK)   |
| `contenido`   | TEXT       | El contenido del testimonio             |
| `calificacion`| INT        | Calificación en estrellas (1-5)         |
| `fecha`       | TIMESTAMP  | Fecha en que se dejó el testimonio      |

---

## Relaciones entre Tablas
- La tabla `productos` está relacionada con `subcategorias` mediante el campo `subcategoria_id`.
- La tabla `carrito_items` está relacionada con `productos` mediante el campo `producto_id`.
- La tabla `testimonios` está relacionada con `usuarios` mediante el campo `usuario_id`.

---

## Instrucciones de Uso

1. **Crear base de datos**: Crea una base de datos en MySQL con el siguiente comando:
   ```sql
   CREATE DATABASE optica;
