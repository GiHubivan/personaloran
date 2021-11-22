# Personal Oran

Es una aplicacion web diseñada para registrar y presentar información referente al personal docente de la sede regional de la UNSa, satisfaciendo por este medio los requerimientos de los diferentes usuarios.

Entre las acciones que podrán realizarse se menciona:

>Carga de Resoluciones

>Carga de Designaciones

>Carga de datos personales de los docentes

>Gestión de los diferentes cargos disponibles e historico de los mismos. 

 
## Requisitos e Instalación
Al estar pensado para la web es totalmente indispensable una conexión continua a internet, de otro modo puede que el sitio no responda como deberia, pues existe dependencia hacia librerias externas como datatables o JQuery.

Se requiere tener montado un servidor Apache, PHP y POSTGRESQL. Existen herramientas que integran los 3 servicios como XAMPP,WAMP(windows) o LAPP(Linux)

Puede descargar el achivo comprimido de :


[https://github.com/GiHubivan/personaloran](https://github.com/GiHubivan/personaloran)

o clonar el repositorio:
```
git clone https://github.com/GiHubivan/personaloran.git
```

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


