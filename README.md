# Personaloran

Es una aplicacion web diseñada para registrar y presentar información referente al personal docente de la sede regional de la UNSa, satisfaciendo por este medio los requerimientos de los diferentes usuarios. Podrá cargarse las diferentes resoluciones que asociadas a las designaciones de personal. Se podrá visualizar los datos requeridos y hacer busquedas por los diferentes campos, gracias a un Dataset basado en JQuery llamado Datatables.

## Requisitos e Instalación
se requiere tener montado un servidor Apache, PHP y POSTGRESQL. Existen herramientas que integran los 3 servicios como XAMPP,WAMP(windows) o LAPP(Linux)

Puede descargar el achivo comprimido de :


[https://github.com/GiHubivan/personaloran](https://github.com/GiHubivan/personaloran)

Luego Extraerla en la raiz del servidor Apache:
  var/www/  o  wampstack/apache2/htdocs/ dependiendo de la forma de instalcaión de Apache.
  
o clonar el repositorio dentro de la raiz del servidor:
```
git clone https://github.com/GiHubivan/personaloran.git
```
Para acceder al sitio en la barra de navegación:
[localhost/personaloran](http://localhost/personaloran)


## Uso
Emplee el archivo personal para recuperar el esquema de base de datos desde el gestor de bases de datos. Para ello debera crear una base de datos con el mismo nombre(personal). Luego click derecho sobre la misma y la opcion restore.

Para comenzar se debe asignar al usuario una clave asociada al correo electronico que será su nombre de usuario. Esta tarea por el momento la realiza el DBA del sistema. En la campo rol se debe asignar 'administrativo' o
'docente' segun corresponda.

La validación de los formularios se realiza mediante HTML5 y expresiones regulares por lo que se recomienda seguir los placeholders de las correspondientes entradas.

## El Archivo conn.php
Dentro de /localhost/personaloran/back_end/config/conn.php deberá configurar las credenciales de su servidor postgres, en la solapa propiedades puede visualizarla. 

```
$host = "localhost";
$user = "tuusuario";
$password = "tucontraseña";
$dbname = "personal";
$port = "5432";
```


