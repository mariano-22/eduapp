<!DOCTYPE html>
<?php
include('menu.php');
include('conexion.php');
?>

<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registro De Docentes</title>

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

        <div class="container-fluid">

            <div class="row">
              <div class="col-lg-12">
                <div class="card-header">
                  <h3>Registro de docentes</h3>
                </div>
              </div>
            </div>

          <div class="card-body">

            <form method="post">

              <div class="col-sm">
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-lg-4">
                      <p></p>
                        <label>Nombre</label>
                      <p></p>
                        <input class="form-control" name="nombre" placeholder="Ingresar Nombre" required>
                    </div>

                    <div class="col-lg-4">
                      <p></p>
                        <label>Apellido</label>
                      <p></p>
                        <input class="form-control" name="apellido" placeholder="Ingresar Apellido" required>
                    </div>

                    <div class="col-lg-4">
                      <p></p>
                        <label>DNI Docente</label>
                      <p></p>
                        <input class="form-control" name="dnid" placeholder="Ingresar DNI" required>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm">
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-lg-4">
                      <p></p>
                        <label> Cuit</label>
                      <p></p>
                        <input class="form-control" placehlder="Ingresar Cuit" type="text" name="cuit"  required>
                    </div>


                    <div class="col-sm">
                      <div class="form-group">
                        <div class="form-row">
                          <div class="col-lg-4">
                            <p></p>
                              <label>Domicilio</label>
                            <p></p>
                              <input class="form-control" type="tel" name="domicilio" placeholder="Ingresar Domicilio"  required>
                          </div>

                    <div class="col-sm">
                      <div class="form-group">
                        <div class="form-row">
                          <div class="col-lg-4">
                            <p></p>
                              <label>Fecha Nacimiento</label>
                            <p></p>
                              <input class="form-control" type="date" name="fechan"  required>
                          </div>

                    <div class="col-lg-4">
                      <p></p>
                        <label> Especialidad </label>
                      <p></p>
                        <input class="form-control" type="text" name="especialidad"  required>
                    </div>


                          <div class="col-sm">
                            <div class="form-group">
                              <div class="form-row">
                                <div class="col-lg-4">
                                  <p></p>
                                    <label> Telefono</label>
                                  <p></p>
                                    <input class="form-control" placehlder="Ingresar Cuit" type="text" name="telefono"  required>
                                </div>

                                <div class="col-sm">
                                  <div class="form-group">
                                    <div class="form-row">
                                      <div class="col-lg-4">
                                        <p></p>
                                          <label> Celular </label>
                                        <p></p>
                                          <input class="form-control" placehlder="Celular" type="text" name="celular"  required>
                                      </div>

                                      <div class="col-lg-4">
                                        <p></p>
                                          <label> Tipo de cargo</label>
                                        <p></p>
                                          <select class="form-control" name="cargo">
                                            <option selected disabled>Seleccione su cargo </option>
                                            <option>Docente</option>
                                            <option> Jefe de taller</option>
                                            <option> Jefe de area</option>
                                            <option>Director</option>
                                            <option>Auxiliar</option>
                                        
                                          </select>
                                      </div>
                                    </div>
                                  </div>
                                </div>



                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm">
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-lg-12">
                      <p></p>
                        <input type="submit" class="btn btn-success" name="siguiente" value="Siguiente">
                    </div>
                  </div>
                </div>
              </div>


            </form>

          </div>
          <!-- card-body -->
        </div>
        <!-- /#page-wrapper -->
      </div>
    <!-- /#wrapper -->
  </div>
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
    <script src="../js/app.js"></script>
  <script src="../js/eliminar.js"></script>

</body>

</html>
