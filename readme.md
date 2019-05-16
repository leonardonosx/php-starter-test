# Prueba de PHP - JIDA. 


### Puntos de Interes 

1. Realizar fork de este repositorio y subir la prueba en un repositorio
 propio en github.
 
### Descripción de la prueba

Se debe realizar una aplicación que permita a un usuario:

- Iniciar sesión
- Ver un listado de posts
- Crear nuevos posts
- Cerrar sesíón.

Todas las acciones deberán realizarse por medio de consultas a una API y es requerido implementar 
una lógica de cache que compare si los registros consultados ya existen y si el valor "time_update" es diferente,
en cuyo caso se deberá actualizar la información de cache a partir de la consulta, sino deberá mostrarse
el listado de articulos desde la cache.

## Indicaciones

- [API](docs/api.md)

### Puntos de interes
  
  - Se deberá desarrollar una clase que permita realizar las multiples solicitudes a la API (metodos GET y POST).
  - Se debe hacer uso de sesiones.
  - Se tendrá en cuenta la limpieza del código.
  - Se tendrán en cuenta las validaciones
  - Cada sección deberá tener una url independiente.
  