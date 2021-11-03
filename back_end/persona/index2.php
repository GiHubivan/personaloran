
<html lang="es">
<head>
		<!-- Datatable CSS -->
<link href='//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>

<!-- jQuery Library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Datatable JS -->
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="../../js/funciones.js"> </script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a>Sede Regional Orán</a>
                   
                   
                </div>
            </div>
            <!-- /navbar-inner -->
        </div><br />

            <div class="container">
                <div class="row">
                    <div class="span12">
                        <div class="content">
                           
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <h3 class="panel-title"><i class="icon-user"></i>Registro de Personas</h3> 
						 
                        </div>
						
                        <div class="panel-body">
							<div class="pull-right">
								<a href="nuevo.php" class="btn btn-sm btn-primary">Nuevo</a>
							</div><br>
							<hr>
                                    <table id="personas" class="table table-bordered table-hover">  
	                                   <thead bgcolor="#eeeeee" align="center">
                                        <tr>
	  
                                        <th>ID</th>
	                                    <th>Nombre </th>
                                        <th>Apellido </th>
                                        <th>dni</th>
                                        <th>Correo </th>
	                                    <th>Nace</th>
										<th>Género</th>
	                                    <th class="text-center"> Acciones </th> 
	  
                                       </tr>
                                      </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                            
                                </div>
                            </div>
                            
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        
        <!--/.wrapper--><br />
        <div class="footer span-12">
            <div class="container">
          Registro de Datos Personales 
            </div>
        </div>
        <script>
        $('#personas').DataTable( {
			"scrollX": true,
			"scrollY": true,		
    ajax: 'fetch.php',
	columns: [
        { data: 'id' },
        { data: 'nombre' },
        { data: 'apellido' },
        { data: 'dni' },
        { data: 'correo' },
        { data: 'nace' },
		{data:'sexo'},
		{defaultContent:'<a href="#" class="badge btn-info viewbtn">VIEW</a>\
			<a href="#" class="badge btn-primary edit_btn">EDIT</a>\
			<a Onclick="elimina_persona('+1+','+4+')" class="badge btn-danger">Delete</a>'
             	
		},		
    ],
	
	} );
		console.log();
        </script>
      
    </body>