<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Registro de Datos Personales</title>
    <script src="../../js/funciones.js"></script>
</head>
<body>


  <!-- Add Modal -->
  <div class="modal fade" id="Student_AddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <form id="formu">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregando registro de Persona</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="error-message">

                    </div>
                </div>
                <div class="col-md-6">
                    <label for="">Nombre</label>
                    <input required="required" onFocus="validar()" pattern="[a-z]{20}" class="form-control fname">
                </div>
                <div class="col-md-6">
                    <label for="">Apellido</label>
                    <input required="required" type="text" class="form-control lname">
                </div>
                <div class="col-md-6">
                    <label for="">Dni</label>
                    <input required="required" type="number" pattern="^[1-9]d{8}$" class="form-control class">
                </div>
                <div class="col-md-6">
                    <label for="">Correo</label>
                    <input required="required" type="email" class="form-control section">
                </div>
                <div class="col-md-6">
                    <label for="">Genero</label>
                    <select required  class="form-control sexo">
                        <option value="m">Masculino</option>
                        <option value="f">Femenino</option>
                        <option value="l">LGBTQ+</option>
</select>
                </div>
                <div class="col-md-6">
                    <label for="">Fecha</label>
                    <input required="required" type="date" class="form-control nace">
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary nuevo">Guardar</button>
      </div>
    </div>
  </div>
</div>
</form>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                           .
                            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#Student_AddModal">
                                Agregar
                            </button>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="message-show">

                        </div>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>DNI</th>
                                    <th>Correo</th>
                                    <th>Genero</th>
                                    <th>Fecha de Nacimiento</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="studentdata">
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function () {
            
           
      function getdata(){
            $.ajax({
                type: "GET",
                url: "fetch.php",
                success: function (response) {
                    // console.log(response);
                    $.each(response, function (key, value) { 
                      //  console.log(value['nombre']);
                        $('.studentdata').append('<tr>'+
                                '<td class="stud_id">'+value['id']+'</td>\
                                <td>'+value['nombre']+'</td>\
                                <td>'+value['apellido']+'</td>\
                                <td>'+value['dni']+'</td>\
                                <td>'+value['correo']+'</td>\
                                <td>'+value['sexo']+'</td>\
                                <td>'+value['nace']+'</td>\
                                <td>\
                                    <a href="#" class="badge btn-info viewbtn">VIEW</a>\
                                    <a href="#" class="badge btn-primary edit_btn">EDIT</a>\
                                    <a Onclick="elimina_persona('+value['id']+','+value['apellido']+')" class="badge btn-danger">Delete</a>\
                                </td>\
                            </tr>');
                    });
                }
            });
      }
      getdata();
$('.nuevo').click(function (e) { 
    e.preventDefault();
    
    var fname = $('.fname').val();
    var lname = $('.lname').val();
    var stu_class = $('.class').val();
    var section = $('.section').val();
    var nace = $('.nace').val();
    var sexo = $('.sexo').val();

    if(fname != '' & lname !='' & stu_class !='' & section !='')
    {
        $.ajax({
            type: "POST",
            url: "code.php",
            data: {
                'checking_add':true,
                'fname': fname,
                'lname': lname,
                'class': stu_class,
                'section': section,
                'sexo': sexo,
                'nace': nace,
            },
            success: function (response) {
                 console.log(response);
                $('#Student_AddModal').modal('hide');
                $('.message-show').append('\
                    <div class="alert alert-success alert-dismissible fade show" role="alert">\
                        <strong>Hey!</strong> '+response+'.\
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">\
                            <span aria-hidden="true">&times;</span>\
                        </button>\
                    </div>\
                ');
                $('.studentdata').html("");
                getdata();
                $('.fname').val("");
                $('.lname').val("");
                $('.class').val("");
                $('.section').val("");
                $('.sexo').val("");
                $('.nace').val("");
                
            }
        });

    }
    else
    {
        // console.log("Please enter all fileds.");
        $('.error-message').append('\
            <div class="alert alert-warning alert-dismissible fade show" role="alert">\
                <strong>Hey!</strong> complete todas las filas.\
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">\
                    <span aria-hidden="true">&times;</span>\
                </button>\
            </div>\
        ');
    }
    
});
});
 
 </script>

  </body>
</html>