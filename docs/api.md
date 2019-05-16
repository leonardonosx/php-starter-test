# API

##LOGIN
```
https[s]://auth.dev.graphs.social/v3/login
```
METHOD: GET

#### PARAMETROS
Name           | Description                       
:------------- |:----------------------------------
email          | testing_user1@emailna.co 
password       | Testing1          
application_id | 5b51eb29303935456453d09a

##LOGOUT
```
https[s]://auth.dev.graphs.social/v3/logout
```
METHOD: GET

####PARAMETROS
Name           | Description                       
:------------- |:----------------------------------
access_token          | access_token obtenido en el metodo login           

## POSTS
```
https://api.dev.graphs.social/v4/graphs
```

Name           | Description                       
:------------- |:----------------------------------
containers_ids | 5c6f0eff3039354935b3553a
entities_ids   | 23
limit          | 30 // Numero de registros por pagina
next           | valor _time_updated_ del ultimo registro de la pagina anterior

 
> **Nota**: La api devuelve una estructura con dos entradas dentro de "data". _entries_
que contiene unicamente los ids obtenidos y _data_ que contiene la información
de cada _entry_  retornado. la información de los posts se encuentra en
el objeto **document**. El valor _time_updated_ esta en cada item del arreglo "data"
 
 Ejemplo:
 ```
"time_updated": 1557951691,
// ....
"document": {
      "description": "Test Notificaciones",
      "title": "Post de Prueba"
    }
```


### Crear Grafo
```angular2html
https://api.[dev.]graphs.social/v3/graphs/
```
METODO: POST

### Parameters
#### POST Parameters
Name                 |Description                                          
:--------------------|:----------------------------------------------------
access_token         |access_token obtenido en el login del usuario
entity               | post
container_id         | graphId del usuario // 5c6f1b403039354a6d865be2           
title                | Titulo del post a crear
description          | Contenido tipo texto a agregar al post.        








