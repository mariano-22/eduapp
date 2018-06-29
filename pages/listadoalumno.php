<!DOCTYPE html>
<?php include('menu.php') ?>
<?php include('conexion.php') ?>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Listado Alumnos</title>

  <!-- Bootstrap Core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- MetisMenu CSS -->
  <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
  <!-- DataTables CSS -->
  <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
  <!-- DataTables Responsive CSS -->
  <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
  <!-- Custom Fonts -->
  <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>
<body>

<div id="wrapper">
  <!-- Navigation -->
  <div id="page-wrapper">

    <div class="row">
      <div class="col-lg-12">
      <h1 class="page-header">Alumnos</h1>
      </div>
      <!-- /.col-lg-12 -->
    </div>
      <!-- /.row -->
    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">

          <!-- /.panel-heading -->
            <div class="panel-body">
              <table id="mytable" width="100%" class="table table-striped table-bordered table-hover">
                <thead>
                  <tr>
                  <th>Dni</th>
                  <th>Dni Tutor</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Domicilio</th>
                  <th>Tecnicatura</th>
                  <th>Año</th>
                  <th>Division</th>
                  </tr>
                </thead>
              <tbody>
                
              </tbody>
              </table>
            </div>
          <!-- /.table-responsive -->
        </div>
        <!-- /.panel-body -->
      </div>
      <!-- /.panel -->
    </div>
    <!-- /.col-lg-6 -->
  </div>
  <!-- /.row -->
</div>
<!-- /#page-wrapper -->

  </div>
  <!-- /#wrapper -->
  <!-- jQuery -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
  <!-- Metis Menu Plugin JavaScript -->
  <script src="../vendor/metisMenu/metisMenu.min.js"></script>
  <!-- DataTables JavaScript -->
  <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
  <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
  <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>
  <!-- Custom Theme JavaScript -->
  <script src="../dist/js/sb-admin-2.js"></script>
  <!-- Page-Level Demo Scripts - Tables - Use for reference -->
  <script>
  $(document).ready(function () {
    cargar();
    });
  var cargar = function () {
    $('#mytable').DataTable({
      "language":idioma_spanol
      });
    }
  var idioma_spanol={
    "sProcessing":     "Procesando...",
    "sLengthMenu":     "Mostrar _MENU_ registros",
    "sZeroRecords":    "No se encontraron resultados",
    "sEmptyTable":     "Ningún dato disponible en esta tabla",
    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix":    "",
    "sSearch":         "Buscar:",
    "sUrl":            "",
    "sInfoThousands":  ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
      "sFirst":    "Primero",
      "sLast":     "Último",
      "sNext":     "Siguiente",
      "sPrevious": "Anterior"
      },
    "oAria": {
      "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
      "sSortDescending": ": Activar para ordenar la columna de manera descendente"
      }
    }
  </script>
</body>
</html>
