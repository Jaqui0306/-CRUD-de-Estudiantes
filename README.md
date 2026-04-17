# CRUD de Estudiantes - Laravel 12

---

# Autor
**Nombre:** Juana Jaqueline Zavala Gumzan  
**Materia:** Programación Web  
**Semestre:** 6  

---

## Descripción del Proyecto

En esta actividad se desarrolló un sistema web utilizando el framework Laravel 12, el cual permite gestionar una lista de estudiantes mediante un CRUD completo (Crear, Leer, Actualizar y Eliminar).

El sistema sigue la arquitectura MVC (Modelo - Vista - Controlador), lo que permite una mejor organización del código y facilita su mantenimiento.

Además, se implementaron funcionalidades para administrar estudiantes y carreras, permitiendo visualizar la relación entre ambos.

---

## Funcionalidades Implementadas

### Estudiantes
-- Registrar nuevos estudiantes  
-- Visualizar lista de estudiantes  
-- Ver detalles de cada estudiante  
-- Editar información  
-- Eliminar registros  
-- Validación de campos obligatorios  

## Carreras
-- Crear nuevas carreras  
-- Listar carreras  
-- Editar carreras  
-- Eliminar carreras  
-- Ver estudiantes registrados en cada carrera  

---

## Base de Datos

Se utilizaron dos tablas principales:

### Tabla: estudiantes
-- id  
-- nombre  
-- correo  
-- carrera_id (relación)  
-- semestre  

### Tabla: carreras
-- id  
-- nombre  

---

## 🔗 Relaciones

Un estudiante pertenece a una carrera 
Una carrera tiene muchos estudiantes 