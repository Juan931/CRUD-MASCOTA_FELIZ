<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content=" Jairo Galeas">
  <link rel="icon" href="../../../../favicon.ico">

  <title>Sili Colombia</title>

  <!-- Bootstrap core CSS -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="bootstrap/css/custom.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.css" />

  <!-- Custom styles for this template -->

</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container px-4">
      <div class="row gx-5">
        <div class="">
          <img src="./imagenes/Silic.PNG" alt="Logo" width="40">



        </div>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
            <li class="text-success">SILICOLOMBIA</li>



            </li>
          </ul>
        </div>
      </div>
      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-primary me-md-2" type="button">Home</button>

      </div>




  </nav>
  <div class="container">
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
      <a href="../HolaWeb.App.Personas/index.php" type="button" class="btn btn-outline-primary">Personas</a>
      <a href="../HolaWeb.App.Mascotas/index.php" type="button" class="btn btn-outline-success">Mascotas</a>
      <a href="../HolaWeb.App.Veterinaria/index.php" type="button" class="btn btn-outline-secondary">Veterinaria</a>
    </div>
 
  <h1 class="page-header text-center text-success">Registro Visitas</h1>
  <div class="row">
    <div class="col-sm-12">
      <a href="#addnew" class="btn btn-primary" data-toggle="modal" style="margin-bottom:8px;"><span class="fa fa-plus"></span> Nuevo</a>
      <?php
      session_start();
      if (isset($_SESSION['message'])) { ?>
        <div class="alert alert-dismissible alert-success" style="margin-top:20px;">
          <button type="button" class="close" data-dismiss="alert">
            &times;
          </button>
          <?php echo $_SESSION['message']; ?>
        </div>

      <?php unset($_SESSION['message']);
      }
      ?>
      <table class="table table-bordered table-striped" id="MiAgenda" style="margin-top:20px; ">
        <thead>
          <th>ID</th>
          <th>NOMBRE DE MASCOTA</th>
          <th>DIA</th>
          <th>TELEFONO</th>
          <th>DIRECCION</th>
          <th>ACCIONES</th>
        </thead>
        <tbody>
          <?php
          include_once 'conexion.php';
          $database = new ConectarDB();
          $db = $database->open();
          try {
            $sql = 'SELECT * FROM personas';
            foreach ($db->query($sql) as $row) { ?>
              <tr>
                <td><?php echo $row['idPersona']; ?></td>
                <td><?php echo $row['Nombre']; ?></td>
                <td><?php echo $row['Telefono']; ?></td>
                <td><?php echo $row['Correo']; ?></td>
                <td><?php echo $row['Direccion']; ?></td>
                <td><a href="#edit_<?php echo $row['idPersona']; ?>" class="btn btn-success btn-sm" data-toggle="modal"><span class="fa fa-edit"></span> Editar</a>
                  <a href="#delete_<?php echo $row['idPersona']; ?>" class="btn btn-danger btn-sm" data-toggle="modal"><span class="fa fa-trash"></span> Eliminar</a>
                </td>
                <?php include 'EditarEliminarModal.php'; ?>
              </tr>
          <?php }
          } catch (PDOException $e) {
            echo 'Hay probleas con la conexion : ' . $e->getmessage();
          }
          $database->close();
          ?>



        </tbody>
      </table>
    </div>
  </div>


  </div><!-- /.container -->
  <?php include './addModal.php'; ?>

  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script>
    window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
  </script>
  <script src="../../assets/js/vendor/popper.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="../2 Recursos/bootstrap/js/bootstrap.min.js"></script>
  <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#MiAgenda').DataTable();
    });
  </script>
</body>

</html>



</div><!-- /.container -->

<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>
  window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
</script>
<script src="../../assets/js/vendor/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="../2 Recursos/bootstrap/js/bootstrap.min.js"></script>
<script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="DataTables/datatables.min.js"></script>

<script type="text/javascript" src="../2 Recursos/DataTables/datatables.min.js"></script>
<script>
  $(document).ready(function() {
    $('#MiAgenda').DataTable();
  });
</script>

<script>
  var table = $('#MiAgenda').DataTable({
    language: {
      "decimal": "",
      "emptyTable": "No hay información",
      "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
      "infoEmpty": "Mostrando 0 a 0 de 0 Entradas",
      "infoFiltered": "(Filtrado de _MAX_ total entradas)",
      "infoPostFix": "",
      "thousands": ",",
      "lengthMenu": "Mostrar _MENU_ Entradas",
      "loadingRecords": "Cargando...",
      "processing": "Procesando...",
      "search": "Buscar:",
      "zeroRecords": "Sin resultados encontrados",
      "paginate": {
        "first": "Primero",
        "last": "Ultimo",
        "next": "Siguiente",
        "previous": "Anterior"
      }
    },


  });
</script>



</body>

</html>