<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <title>Document</title>
</head>
<body>
<nav> 
        <div class="container">
            <nav class="nav-main">
                    <img src="img/logo libretech.png" alt="Librytech logo" class="nav-brand">
                <ul class="nav-menu show">
                    <li>
                        <a href="#">Librytech</a>
                        <!-- FONT AWOZONE (CLASE) -->
                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
                        <!--FONT OSWALD-->
                        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400&display=swap" rel="stylesheet">
                        <!--CUSTOM CSS-->
                        <link rel="stylesheet" href="styles3.css">
                    </li>
                    <li>
                        <a href="inicio.php">Inicio</a>
                    </li>
                    <li>
                        <a href="registro.php">Registro</a>
                    </li>
                    <li>
                        <a href="proximamente.php">Entregas</a>
                    </li>
                    <li>
                        <a href="cerrar_sesion.php">Cerrar sesión</a>
                    </li>
                </ul>
                <ul class="nav-menu-right">
                    <li>
                        <a href="#">
                            <i class="fas fa-search"></i>
                        </a>
                    </li>
                </ul>
            </nav>
  <div class="container">
    <h1 class="text-center">Registro</h1>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#insertar">
  Registrar
</button>
    <br>
    <br>
    <table class="table table-striped">
      <thead>
        <tr>
        <table class="table">
  <thead>
    <tr>
    <th scope="col">Fecha</th>
    <th scope="col">Autor</th>
      <th scope="col">Título</th>
      <th scope="col">Nombre del alumno</th>
      <th scope="col">Fecha de entrega</th>
      <th scope="col">Nombre de encargado</th>
      <th scope="col">Grado/grupo/turno</th>
      <th scope="col">Bachillerato</th>
      <th scope="col">Código de barra</th>
      <th scope="col">numero de ejemplar</th>
      <th scope="col">Codigo del alumno</th>
      <th scope="col">Tel. del alumno</th>
      <th scope="col">Correo electrónico</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
    <!--registros de la base de datos-->
    <?php   include_once("listar.php");?>
    <?php foreach($registro as $registrop) {?>
      <tr>
        <td><?php echo $registrop->fecha?></td>

        <td><?php echo $registrop->autor?></td>

        <td><?php echo $registrop->titulo?></td>

        <td><?php echo $registrop->nombredealumno?></td>

        <td><?php echo $registrop->fechaentrega?></td>

        <td><?php echo $registrop->nombreencargado?></td>

        <td><?php echo $registrop->gradugrupoturno?></td>

        <td><?php echo $registrop->bachillerato?></td>

        <td><?php echo $registrop->codigobarras?></td>

        <td><?php echo $registrop->numeroejemplar?></td>

        <td><?php echo $registrop->codigoalumno?></td>
        
        <td><?php echo $registrop->celularalumno?></td>

        <td><?php echo $registrop->correo?></td>

        <td><button type="button" class="btn btn-success editbtn" data-toggle="modal" data-target="#editar">
  Editar
</button></td>
<td><button type="button" class="btn btn-danger deletebtn" data-toggle="modal" data-target="#eliminar">
  Eliminar
</button></td>

      </tr>
    <?php }?>


</tbody>
</table>

    </div>
    <!-- Modal insertar-->
<div class="modal fade" id="insertar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registrar pedido de libro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <!-- formulario-->  
      <form action="registrar.php" method="POST">
        <div class="form-group">
          <label for="">Fecha</label>
          <input type="text" name="fecha" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Autor</label>
          <input type="text" name="autor" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Título</label>
          <input type="text" name="titulo" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Nombre del Alumno</label>
          <input type="text" name="nombredealumno" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Fecha de entrega</label>
          <input type="text" name="fechaentrega" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Nombre de encargado</label>
          <input type="text" name="nombreencargado" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Grado, grupo y turno</label>
          <input type="text" name="gradugrupoturno" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Bachillerato</label>
          <select name="bachillerato" id="" class="form-control">
          <option value="btds">BTDS</option>
          <option value="bgc">BGC</option>
          <option value="btdi">BTDI</option>
          </select>
        </div>
        <div class="form-group">
          <label for="">Código de barra</label>
          <input type="text" name="codigobarras" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Numero de ejemplar</label>
          <input type="number" name="numeroejemplar" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Código del alumno</label>
          <input type="text" name="codigoalumno" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Número celular del alumno:</label>
          <input type="text" name="celularalumno" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Correo electrónico</label>
          <input type="text" name="correo" class="form-control">
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar registro</button>
      </div>

      </form>
      </div>
    </div>
  </div>
</div>


    <!-- Modal editar-->
    <div class="modal fade" id="editar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar persona</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <!-- formulario-->  
      <form action="editar.php" method="POST">
        <div class="form-group">
          <label for="">Fecha</label>
          <input type="text" name="fecha" id="fecha" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Autor</label>
          <input type="text" name="autor" id="autor" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Título</label>
          <input type="text" name="titulo" id="titulo" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Nombre del Alumno</label>
          <input type="text" name="nombredealumno" id="nombredealumno" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Fecha de entrega</label>
          <input type="text" name="fechaentrega" id="fechaentrega" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Nombre de encargado</label>
          <input type="text" name="nombreencargado" id="nombreencargado" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Grado, grupo y turno</label>
          <input type="text" name="gradugrupoturno" id="gradugrupoturno" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Bachillerato</label>
          <select name="bachillerato" id="bachillerato" class="form-control">
          <option value="btds">BTDS</option>
          <option value="bgc">BGC</option>
          <option value="btdi">BTDI</option>
          </select>
        </div>
        <div class="form-group">
          <label for="">Código de barra</label>
          <input type="text" name="codigobarras" id="codigobarras" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Numero de ejemplar</label>
          <input type="number" name="numeroejemplar" id="numeroejemplar" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Código del alumno</label>
          <input type="text" name="codigoalumno" id="codigoalumno" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Número celular del alumno:</label>
          <input type="text" name="celularalumno"  id="celularalumno" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Correo electrónico</label>
          <input type="text" name="correo" id="correo" class="form-control">
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar cambios</button>
      </div>

      </form>
      </div>
    </div>
  </div>
</div>






    <!-- Modal eliminar-->
    <div class="modal fade" id="eliminar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar persona</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <!-- formulario-->  
      <h4>¿Estás seguro de Eliminar?</h4>
      <form action="eliminar.php" method="POST">
      <input type="hidden" namespace="fecha" id="delete_fecha">
 
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <button type="submit" class="btn btn-primary">Eliminar</button>
      </div>

      </form>
      </div>
    </div>
  </div>
</div>




<script>

$('.editbtn').on('click',function () {
  $tr=$(this).closest('tr');
  var datos=$tr.children("td").map(function () {
    return $(this).text();
  });
  $('#fecha').val(datos[0]);
  $('#autor').val(datos[1]);
  $('#titulo').val(datos[2]);
  $('#nombredealumno').val(datos[3]);
  $('#fechaentrega').val(datos[4]);
  $('#nombreencargado').val(datos[5]);
  $('#gradugrupoturno').val(datos[6]);
  $('#bachillerato').val(datos[7]);
  $('#codigobarras').val(datos[8]);
  $('#numeroejemplar').val(datos[9]);
  $('#codigoalumno').val(datos[10]);
  $('#celularalumno').val(datos[11]);
  $('#correo').val(datos[12]);
});
</script>

<script>

$('.deletebtn').on('click',function () {
  $tr=$(this).closest('tr');
  var datos=$tr.children("td").map(function () {
    return $(this).text();
  });
  $('#delete_fecha').val(datos[0]);
});
</script>

    </body>
</html>