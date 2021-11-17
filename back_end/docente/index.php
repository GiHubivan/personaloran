<?php session_start();?>
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
    <p><?php echo $_SESSION["mensaje"];//unset($_SESSION["mensaje"]);?></p>
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
                        <h3 class="panel-title"><i class="icon-user"></i>Registro de Docentes</h3> 
						 
                        </div>
						
                        <div class="panel-body">
							<div class="pull-right">
								<a href="nuevo.php" class="btn btn-sm btn-primary">Nuevo</a>
							</div><br>
							<hr>
                                    <table id="docentes" class="table table-bordered table-hover">  
	                                   <thead>
                                        <tr>
	  
                                        <th>legajo</th>
	                                    <th>titulo </th>
                                        <th>dni</th>
                                        <th>Cuil </th>	                                    
										<th>Situación de Revista</th>
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
          Registro de Docentes
            </div>
        </div>
        <script>
        $(document).ready(function(){
            var tabla = $('#docentes').DataTable({
          
                ajax: {
                    url: 'fetch.php'
                },
                columns: [
                    { data: 'legajo' },
                    { data: 'titulo' },
                    { data: 'dni' },
                    { data: 'cuil' },
                    { data: 'revista' },
                    {data:'botones'},
                   
                    ],       
                "scrollX": true,
                "scrollY": true,
                "language": {
            "lengthMenu": "Mostrando _MENU_ registros por pagina",
            "zeroRecords": "No hay registros",
            "info": "mostrando pagina _PAGE_ de _PAGES_",
            "infoEmpty": "No hay Registros",
            "infoFiltered": "(filtered from _MAX_ total records)",
            "Next":"Siguiente"
        },
                    order: [3,'Asc']
                });
        });
            
                                </script>
      
    </body>