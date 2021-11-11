<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario peticiones REST</title>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    </head>	
    <body>
        <script>
            $(document).ready(function()
            {
                $.ajaxSetup({cache: false});

                // Alta de usuarios.
                $("#alta").click(function()
                {
                    
                    $.post("./index.php/usuarios/new",$("#formulario").serialize(),function(resultados)
                    {
                       
                       resultados=$.parseJSON(resultados);
                       mensajes(resultados.estado,resultados.mensaje);
                    });
                });
                   
                 // Borrado de usuarios.
                 $("#borrado").click(function()
                 {
                    if ($("#id").val()!="")
                        $.ajax(
                            {
                                type: 'DELETE',
                                url: 'index.php/usuarios/'+$("#id").val(),
                                cache: false,
                                dataType: "json",
                                success: function(resultados,textStatus,jqXHR)
                                {
                                    // No tenemos q convertir el string JSON
                                    // por que ya lo convierte a objeto
                                    // automaticamente al indicarlo en dataType
                                       mensajes(resultados.estado,resultados.mensaje);                                    
                                },
                                error: function(jqXHR, textStatus, errorThrown)
                                {
                                       alert(textStatus);
                               }
                            }); // Fin peticion $.ajax.
                 }); // Fin click borrado
                 
                 
                 
                 // Actualización de usuarios.
                 $("#actualizacion").click(function()
                 {
                    if ($("#id").val()!="")
                        $.ajax(
                            {
                                type: 'PUT',
                                url: 'index.php/usuarios/'+$("#id").val(),
                                cache: false,
                                data: $("#formulario").serialize(),
                                dataType: "json",
                                success: function(resultados,textStatus,jqXHR)
                                {
                                    // No tenemos q convertir el string JSON
                                    // por que ya lo convierte a objeto
                                    // automaticamente al indicarlo en dataType
                                       mensajes(resultados.estado,resultados.mensaje);                                    
                                },
                                error: function(jqXHR, textStatus, errorThrown)
                                {
                                       alert(textStatus);
                               }
                            }); // Fin peticion $.ajax.
                 }); // Fin click borrado
                 

                function mensajes(estado, mensaje)
                {
                    if (estado)
                        $("#mensajes").hide().html('<span class="label label-success">' +
						mensaje + '</span>').fadeIn(500).delay(1000).fadeOut(1500);
                    else
                        $("#mensajes").hide().html('<span class="label label-danger">' +
						mensaje + '</span>').fadeIn(500).delay(1000).fadeOut(1500);
                }
            });
        </script>

<div class="container">
<form id="formulario" role="form" action="agregar.php" method="POST">
	<legend>Nuevo Registro de Personas</legend>
	<div class="form-group">
	<label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre" class="form-control" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}" required/>
	<label for="apellido">Apellidos</label>
    <input type="text" name="apellido" id="apellido" class="form-control" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}" required/>
	
    <div class="form-group">
    <label for="dni">DNI</label>
	<input  required="reuired" type="number" class="form-control" id="dni" name="dni" placeholder="Introduzca el dni">
	

    <label for="fecha">Fecha de Nacimiento</label>
	<input type="date"  min="1945-01-01" max="2003-06-31" class="form-control" id="fecha" required="required" name="fecha" placeholder="Introduzca nombre de usuario">
	

    <label for="correo">Email</label>
	<input type="email" class="form-control" id="correo" name="correo" required ="required" placeholder="ejemplo@emplo.coa">
	
    
    <label for="sexo">Genero</label><br>
	<input type="radio"  id="sexo" name="sexo" value="m" chequed="" required>Masculino
    
	<input type="radio"  id="sexo" name="sexo" value="f" chequed=""required>Femenino

	<input type="radio"  id="sexo" name="sexo" value="l" chequed="" selected="" required>LGBTQ+

</div>
	<button type="submit" class="btn btn-primary" id="alta">Guardar</button> 
	<button type="button" class="btn btn-primary" id="actualizacion">Actualizar</button>
<br/>
	<button type="button" class="btn btn-primary" id="borrado">Borrar </button>
	<div id="mensajes"></div>
</form>
</div>

</body>
</html>
