<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nueva</title>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    </head>	
    <body>
       

<div class="container">
<form id="formulario" role="form" action="agregar.php" method="POST">
	<legend>Nuevo Docente</legend>
	<div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre" class="form-control" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}" required/>
	<label for="apellido">Apellidos</label>
    <input type="text" name="apellido" id="apellido" class="form-control" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}" required/>
	<label for="dni">DNI</label>

    <input  required="required" class="form-control" pattern="[1-5]{1}[0-9]{7}"  id="dni" name="dni" placeholder="Introduzca el dni">
	  <label for="fecha">Fecha de Nacimiento</label>
	<input type="date"  min="1945-01-01" max="2003-06-31" class="form-control" id="fecha" required="required" name="fecha" placeholder="Introduzca nombre de usuario">
	

    <label for="correo">Email</label>
	<input type="email" class="form-control" id="correo" name="correo" required ="required" placeholder="ejemplo@emplo.coa">
	
    
    <label for="sexo">Genero</label><br>
	<input type="radio"  id="sexo" name="sexo" value="m" chequed="" required>Masculino
    
	<input type="radio"  id="sexo" name="sexo" value="f" chequed=""required>Femenino

	<input type="radio"  id="sexo" name="sexo" value="l" chequed="" selected="" required>LGBTQ+

	<label for="titulo">Titulo</label>
    <input type="text" name="titulo" id="titulo" class="form-control" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}" required/>
	
    
    <label for="cuil">CUIL</label>
	<input type="text" pattern="[0-9]{2}-[0-9]{8}-[0-9]{1}"  class="form-control" id="cuil" required="required" name="fecha" placeholder="Introduzca nombre de usuario">
	

	
    
</div>
	<button type="submit" class="btn btn-primary" id="alta">Guardar</button> 
	<button type="button" class="btn btn-primary" id="actualizacion" Onclick="location.href='index.php'">Cancelar</button>
	<button type="reset" class="btn btn-primary" id="borrado">Borrar </button>
	<div id="mensajes"></div>
</form>
</div>

</body>
</html>
