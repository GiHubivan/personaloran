
# Personal Oran
La sede Regional Orán de la Universidad Nacional de Salta cuenta actualmente con una plantel de personal de aproximadamente 200 personas, manipular su información puede resultar una tarea compleja y obtener datos que permitan la toma de decisiones resulta costoso en tiempo y esfuerzo. Es este elotivo que nos impulsa a proponer un solución web que permita automatizar procesos y mejorar los tiempos de respuesta para quienes tienen que administrar este valioso recurso .

Entre las acciones que podrán realizarse se menciona:

- Carga de Resoluciones

- Carga de Designaciones

- Carga de datos personales de los docentes

- Gestión de los diferentes cargos disponibles e historico de los mismos.


>Actualmente la universidad realiza este proceso de forma manual,
>por lo que acceder a información oportuna y actualizada llega a ser
>un problema todavia no resuelto eficientemente.

 
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
Emplee el archivo personal para recuperar el esquema de base de datos desde el gestor de bases de datos. Para ello debera crear una base de datos con el mismo nombre(personal). Luego click derecho sobre la misma y la opcion restore. Luego seleccione el archivo personal que esta ubicado en la carpeta raíz del directorio descargado o clonado.

Para comenzar se debe asignar al usuario una clave asociada al correo electronico que será su nombre de usuario. Esta tarea por el momento la realiza el DBA del sistema. En la campo rol se debe asignar 'administrativo','docente' o 'postulante' según corresponda.
- [Administrativos] Se plantea que solo los administrativos puedan acceder a cargar resolucones, designaciones y altas de docentes.
- [Docente] Los docentes podrán inscibirse a concursos abiertos como cerrados, acceder a información de su interés.
- [Postulantes] Personas que no pertenecen al personal pero que se registran como aspirantes a ocupar un cargo dentro de la universidad.

## El Archivo conn.php
Dentro de /localhost/personaloran/back_end/config/conn.php deberá configurar las credenciales de su servidor postgres, en la solapa propiedades puede visualizarla. 

```
$host = "localhost";
$user = "tuusuario";
$password = "tucontraseña";
$dbname = "personal";
$port = "5432";
```
## Tecnología
- [HTML] Mediante el cual se maqueta la estructura de las páginas web, presenta al usuario el contenido estático del sitio.
-  [Javascript] Se ejecuta del lado del cliente y direcciona al usuario mediante eventos como presionar un botón, usar el ratón o cambiar el foco.
-  [Ajax] Empleado para traer información desde el servidor hacia el lado del cliente.
-  [PHP] Lenguaje para interactuar con el back end del sitio web. El empleo de variables de sessión  implementadas con php permite direccionar a los usuarios por los diferentes menues disponibles
-  [Auth0] Servicio de Logueo con gmail de google.
-  [Visual Studio Code] Editor de código con extensiones muy prácticas como Emmet.Además posse un cliente Git con el cual nos permite tener actualizado nuestro repositorio.
-  [CSS3] Para personalizar la presentación y lograr una interfaz responsive. 
- [Datatables] Dataset basado en bootstrap y JQuery, permite no solo la presentación elegante de datos tabulados, sino también ordenarlos por campo, paginarlos y realizar búsquedas sobre los mismos.
- [Postgres] Motor de base de datos objeto-relacional. Mediante su interfaz gráfica(PGAdmin4) nos permite la implementación de la base de datos de forma rápida. Se crearon funciones y procedimientos en SQL que permiten realizar los (ABM) de las tablas en un código más simple y legible. Además se crearon vistas que permiten la integración de los datos y facilitar la lectura del código para su posterior mantenimiento.
