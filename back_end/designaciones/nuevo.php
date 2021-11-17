<?php include '../config/conn.php';
$consulta="select * from docente";
$result=pg_exec($con,$consulta);
$filas=pg_num_rows($result);

?>

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
	<legend>Nueva Designacion</legend>
	<div class="form-group">
	<label for="numero">Número</label>
    <input type="text" name="numero" id="numero" class="form-control" pattern="[0-9]{2,4}/[0-9]{2,4}" required/>
	<label for="fecha">Desde</label>
    <input type="date" name="fecha" id="fecha" min="01/01/1971" max="12/11/2021"class="form-control"  required/>
    <label for="fecha">Hasta</label>
    <input type="date" name="fecha" id="fecha" min="01/01/1971" max="12/11/2021"class="form-control"  required/>

    <label for="docente">Docente</label>
    <select class=form-control name="origen" id="origen">
    <?php for ($i=0;$i<$filas;$i++){
    $row=pg_fetch_array($result);

          
            echo '<option value="'.$row["legajo"].'">'.$row["apellido"].'</option>';}
            ?>

    </select>
     <label for="resol" >Resol</label>
    <input type="text" name="resol" id="reso" pattern="[h][t][t][p][:][/][/][a-z/.-]{2,64}[.][p][d][f]" class="form-control" placeholder="http://ejemplo.com" required>
</div>
	<button type="submit" class="btn btn-primary" id="alta">Guardar</button> 
	<button type="button" class="btn btn-primary" id="actualizacion" Onclick="location.href='index.php'">Cancelar</button>
	<button type="reset" class="btn btn-primary" id="borrado">Borrar </button>
	<div id="mensajes"></div>
</form>
</div>

</body>
</html>
