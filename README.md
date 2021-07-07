# Título del Proyecto

_API desarrollada con el fin de realizar operaciones de lectura, escritura, actulización y borrado de archivos almacenados en base de datos._

## Comenzando 🚀

_Estas instrucciones te permitirán obtener una copia del proyecto en funcionamiento en tu máquina local para propósitos de desarrollo y pruebas._

Mira **Deployment** para conocer como desplegar el proyecto.


### Pre-requisitos 📋

_Para su funcionanmiento se necesitan:_

```
> PHP: Para instalar PHP 7 puedes seguir uno de los pasos que se explican en el Manual de PHP. https://www.php.net/manual/es/install.php
> Composer:  El gestor de dependencias de PHP, composer, es otro de los requisitos para comenzar. En el Manual de Composer puedes ver las instrucciones para la instalación. https://getcomposer.org/
> Postman: Plataforma que nos permitirá realizar peticiones sobre APIs con el objetivo de probarlas.
> Editor de código. (Recomendado Visual Studio Code).
> MySQL.
```

### Instalación 🔧

_Paso 1:_

_Desde la terminal de comandos, nos situamos en nuestro directorio de proyectos e instalamos Laravel usando el siguiente comando de Composer:_

```
$ composer create-project laravel/laravel mi-proyecto-laravel
```

_Este comando te creará la carpeta de tu nuevo proyecto, que tendrá el nombre en este caso de "mi-proyecto-laravel" y dentro de tal directorio colocará todos los archivos del proyecto Laravel._

_En caso de utilizar otra versión de Laravel, se debe especificar lugar del comando. Por ejemplo:_

```
$ composer create-project laravel/laravel mi-proyecto-laravel 5.5.*
```

_Una vez creado el proyecto, descomprimimos dentro de la carpeta del mismo el archivo comprimido descargado._

_Luego, desde la terminar de comando, siempre situados en el directorio de nuestro proyecto, ejecutamos el siguiente comando para verificar si nuestra aplicación funciona:_

```
$ php artisan serve

```

_Paso 2:_

_Creamos la base de datos que utilizaremos. No es necesario realizar ninguna configuración. En este caso se utilizó como herramienta MySQL Workbench._

```
create database nombre-BD;
```

_Paso 3:_

_Una vez creada la estructura de nuestro proyecto y la base de datos, debemos configurar las credenciales para conectarnos a la base de datos. Para ello, localizamos en fichero **.env** que se encuentra en la carpeta raíz de nuestro proyecto._

```
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE="nombre BD creada"
DB_USERNAME="user"
DB_PASSWORD="password"
```


_Paso 4:_

_Luego de configurar nuestras credenciales debemos ejecutar el comando de migración para que se creen las tablas necesarias en nuestra base de datos. Utilizamos la interfaz de línea de comandos **artisan** que nos proporciona comandos útiles para el desarrollo de nuestra aplicación. Ademas, de ser requeridos, agregamos **--seed** al final del comando para migrar datos de pruebas._

```
$ php artisan migrate --seed
```


## Ejecutando peticiones

_Para realizar pruebas sobre la API utu¿ilizaremos POSTMAN. Para descargarlo solo debemos dirigirnos a https://www.postman.com/downloads/. Podemos elegir dos opciones, descargar la app y ejecutarla desde nuestra computadora o utilizar la versión web._

* _POST: Realizamos una petición POST para crear un nuevo registro en la base de datos._
```
POST: http://localhost:3000/public/api/asociados
```

* _GET: El primer ejemplo obtiene todos los registros de la tabla asociados de nuestra base de datos, mostrando cada uno de sus datos. Sin embargo, el segundo ejemplo, solo obtiene los datos de un registro en particular de la tabla asociados, en este caso el que contiene id = 2._

```
GET: http://localhost:3000/public/api/asociados

{
    "id": 1,
    "nombre": "Ryan",
    "apellido": "Doyle",
    "numAsociado": 13,
    "fechaIngreso": "1986-10-04 05:53:30",
    "fechaBaja": "1984-05-01 11:40:20",
    "created_at": "2021-02-09T03:27:30.000000Z",
    "updated_at": "2021-02-09T03:27:30.000000Z"
},
{
    "id": 2,
    "nombre": "luis",
    "apellido": "Messi",
    "numAsociado": 99,
    "fechaIngreso": "1989-10-23 22:34:06",
    "fechaBaja": "2020-08-02 00:00:00",
    "created_at": "2021-02-09T03:27:30.000000Z",
    "updated_at": "2021-02-09T03:28:13.000000Z"
},
{
    "id": 3,
    "nombre": "Filiberto",
    "apellido": "Conroy",
    "numAsociado": 3,
    "fechaIngreso": "1988-11-26 09:41:49",
    "fechaBaja": null,
    "created_at": "2021-02-09T03:27:30.000000Z",
    "updated_at": "2021-02-09T03:27:30.000000Z"
}
```

```
GET: http://localhost:3000/public/api/asociados/2
{
    "id": 2,
    "nombre": "luis",
    "apellido": "Messi",
    "numAsociado": 99,
    "fechaIngreso": "1989-10-23 22:34:06",
    "fechaBaja": "2020-08-02 00:00:00",
    "created_at": "2021-02-09T03:27:30.000000Z",
    "updated_at": "2021-02-09T03:28:13.000000Z"
}

```

* _PUT: Petición para realizar modificaciones sobre los regristos. Contiene un parámetro obliglatorio que corresponde al id del registro que se desea modificar, en este caso es es id = 4._
```
PUT: http://localhost:3000/public/api/asociados/4
```

* _DELETE: Utilizamos esta petición para eliminar un registro de la base de datos. Al igual que PUT, contiene un parámetro obliglatorio que corresponde al id del registro que se desea eliminar, en este caso es es id = 1._
```
DELETE: http://localhost:3000/public/api/asociados/1
```

