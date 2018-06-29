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

    <title>Registro De Alumnos</title>

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
                  <h3>Registro de alumnos</h3>
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
                        <label>DNI Alumno</label>
                      <p></p>
                        <input class="form-control" name="dnia" placeholder="Ingresar DNI" required>
                    </div>
                  </div>
                </div>
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
                        <label>Sexo</label>
                      <p></p>
                      <select class="form-control" name="sexo" required>
                        <option value="" selected disabled>Seleccione Sexo</option>
                        <option>Femenino</option>
                        <option>Masculino</option>
                      </select>
                    </div>

                    <div class="col-lg-4">
                      <p></p>
                        <label>Nacionalidad</label>
                      <p></p>
                        <select class="form-control" name="nacionalidad" required>
                          <option value="" selected disabled>Seleccione nacionalidad</option>
                            <?php
                              while ($fila=mysqli_fetch_row($fnacio)) {
                                echo "<option value='".$fila['0']."'>".utf8_encode($fila['1'])."</option>";
                              }
                            ?>
                        </select>
                    </div>
                  </div>
                </div>
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
                    <div class="col-lg-4">
                      <p></p>
                        <label>DNI Tutor</label>
                      <p></p>
                        <input class="form-control" name="dnitutor" placeholder="Ingresar DNI" required>
                    </div>
                    <div class="col-lg-4">
                      <p></p>
                        <label>Nº Orden</label>
                      <p></p>
                        <input class="form-control" name="norden" placeholder="Ingresar Nº Orden" required>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm">
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-lg-4">
                      <p></p>
                        <label>Tecnicatura</label>
                      <p></p>
                        <select class="form-control" name="tecnicatura" required>
                          <option value="" selected disabled>Seleccione tecnicatura</option>
                          <?php
                          while ($fila=mysqli_fetch_row($tec)) {
                          echo "<option value='".$fila['0']."'>".utf8_encode($fila['1'])."</option>";
                          }
                          ?>
                        </select>
                    </div>
                    <div class="col-lg-4">
                      <p></p>
                        <label>Año</label>
                      <p></p>
                        <select class="form-control" name="anio" required>
                          <option value="" selected disabled>Seleccione año</option>
                          <?php
                          while ($fila=mysqli_fetch_row($fanio)) {
                          echo "<option value='".$fila['0']."'>".utf8_encode($fila['1'])."</option>";
                          }
                          ?>
                        </select>
                    </div>
                    <div class="col-lg-4">
                      <p></p>
                        <label>Division</label>
                      <p></p>
                        <select class="form-control" name="division">
                          <option selected disabled>Seleccione Division</option>
                          <option>UNICA</option>
                          <option>1ra</option>
                          <option>2da</option>
                          <option>3ra</option>
                          <option>4ta</option>
                          <option>5ta</option>
                          <option>6ta</option>
                        </select>
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
