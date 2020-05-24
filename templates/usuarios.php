<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Vs_Arena Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<!-- Wrapper START -->
<div class="wrapper">

  <!-- Navbar START-->
  <?php
  require_once("../components/nav.php")
  ?>
  <!-- Navbar END-->

  <!-- Main Sidebar Container START-->
  <?php
  require_once("../components/aside.php");
  ?>
  <!-- Main Sidebar Container END-->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) START-->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">

          <!-- Titulo Page START -->
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Usuarios</h1>
          </div>
          <!-- Titulo Page END -->

          <!-- Navegacion Pages START -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="./usuarios.php">Dashboard | Vs_Arena</a></li>
              <li class="breadcrumb-item active">Usuarios</li>
            </ol>
          </div>
          <!-- Navegacion Pages END -->

        </div>
      </div>
    </div>
    <!-- Content Header (Page header) END-->

    <!-- Content START -->
    <section class="content">

      <!-- Fluid START -->
      <div class="container-fluid">
        
        <!--Subtitulo START-->
        <div class="row mb-4">
          <div class="col-6">
            <h2 class="m-0 text-dark">Informacion Usuarios</h2>
          </div>
        </div>
        <!--Subtitulo END-->

        <!-- Small boxes (Stat box) START-->
        <div class="row">

          <!-- Box 1 START -->
          <div class="col-lg-6 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>
                <p>Usuarios Registrados</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
            </div>
          </div>
          <!-- Box 1 END -->

          <!-- Box 2 START -->
          <div class="col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>
                <p>Cantidad Máxima de Usuarios en un Solo torneo</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
            </div>
          </div>
          <!-- Box 2 END -->

        </div>
        <!-- Small boxes (Stat box) END-->

        <div class="row">
          
          <!-- Tabla Usuarios START -->
          <div class="col-12">
            <div class="card">
              
              <!-- Card Header START -->
              <div class="card-header">
                <h3 class="card-title">Usuarios</h3>
              </div>
              <!-- Card Header END -->

              <!-- Card Body START -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">

                  <!-- Cabecera Tabla Usuarios START -->
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Usuarios</th>
                    <th>Email</th>
                    <th>Efectivo</th>
                    <th>Moneda Virtual</th>
                    <th>Advertencia</th>
                    <th>Banear</th>
                  </tr>
                  </thead>
                  <!-- Cabecera Tabla Usuarios END -->

                  <!-- Contenido Usuarios START -->
                  <tbody>
                  <tr>
                    <td><a href="./usuario.php">368</a></td>
                    <td><a href="./usuario.php">Zenaku412</a></td>
                    <td>hoyosjuan@olimpodm.com</td>
                    <td>$55.69</td>
                    <td>8600</td>
                    <td><span class="badge bg-warning" title="Advertir posible Ban"><i class="fas fa-exclamation-triangle"></i></span></td>
                    <td><span class="badge bg-danger" title="Banear"><i class="fas fa-skull-crossbones"></i></span></td>
                  </tr>
                  </tbody>
                  <!-- Contenido Usuarios END -->

                </table>
              </div>
              <!-- Card Body END -->

            </div>
          </div>
          <!-- Tabla Usuarios END -->

          <!-- Tabla Equipos START -->
          <div class="col-12">
            <div class="card">

              <!-- Card Header START -->
              <div class="card-header">
                <h3 class="card-title">Equipos</h3>
              </div>
              <!-- Card Header END -->
              
              <!-- Card Body START -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  
                  <!-- Cabecera Tabla Equipos START -->
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Equipo</th>
                    <th>Cantidad de integrantes</th>
                    <th>Enviar Email a equipo</th>
                  </tr>
                  </thead>
                  <!-- Cabecera Tabla Equipos END -->
                  
                  <!-- Contenido Tabla Equipos START -->
                  <tbody>
                  <tr>
                    <td><a href="./equipo.php">256</a></td>
                    <td><a href="./equipo.php">Fuego Rapido</a></td>
                    <td>5</td>
                    <td><span class="badge bg-primary" title="Enviar Email"><i class="fas fa-envelope"></i></span></td>
                  </tr>
                  <tr>
                    <td><a href="./equipo.php">206</a></td>
                    <td><a href="./equipo.php">Las Estrellas</a></td>
                    <td>4</td>
                    <td><span class="badge bg-primary" title="Enviar Email"><i class="fas fa-envelope"></i></span></td>
                  </tr>
                  <tr>
                    <td><a href="./equipo.php">056</a></td>
                    <td><a href="./equipo.php">Nube Negra</a></td>
                    <td>4</td>
                    <td><span class="badge bg-primary" title="Enviar Email"><i class="fas fa-envelope"></i></span></td>
                  </tr>
                  <tr>
                    <td><a href="./equipo.php">060</a></td>
                    <td><a href="./equipo.php">Sol Naciente</a></td>
                    <td>3</td>
                    <td><span class="badge bg-primary" title="Enviar Email"><i class="fas fa-envelope"></i></span></td>
                  </tr>
                  <tr>
                    <td><a href="./equipo.php">125</a></td>
                    <td><a href="./equipo.php">Frio Quemador</a></td>
                    <td>5</td>
                    <td><span class="badge bg-primary" title="Enviar Email"><i class="fas fa-envelope"></i></span></td>
                  </tr>
                  </tbody>
                  <!-- Cabecera Tabla Torneo END -->

                </table>
              </div>
              <!-- Card Body END -->

            </div>
          </div>
          <!-- Tabla Grupo END -->  

        </div>

        <!--Subtitulo START-->
        <div class="row mt-4 mb-4">
          <div class="col-6">
            <h2 class="m-0 text-dark">Enviar un email a todos los Usuarios</h2>
          </div>
        </div>
        <!--Subtitulo END-->

        <!-- Enviar un email a todos los Usuarios START -->
        <div class="row">
          <div class="col-12">
            <form class="card card-outline card-info">

              <!-- Card Header START -->
              <div class="card-header">

                <!-- Input Asunto START -->
                <div class="form-group col-6">
                  <label for="exampleInputEmail1">Asunto</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Asunto...">
                </div>
                <!-- Input Asunto END -->

                <!-- Tools Box START -->
                <div class="card-tools">
                  <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                          title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"
                          title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
                <!-- Tools Box END -->

              </div>
              <!-- Tools Box END -->

              <div class="card-body pad">
                <div class="mb-3">
                  <textarea class="textarea" placeholder="Place some text here"
                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
              </div>

              <!-- Card Submit START -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Enviar Email</button>
              </div>
              <!-- Card Submit END -->
              
            </form>
          </div>
        </div>
        <!-- Enviar un email a todos los Usuarios END -->

      </div>
      <!-- Fluid END -->

    </section>
    <!-- Content END -->

  </div>
  <!-- /.content-wrapper -->

  <!--FOOTER START-->
  <?php
  require_once("../components/footer.php");
  ?>
  <!--FOOTER END-->

  
</div>
<!-- Wrapper END -->

<!-- SCRIPTS -->
<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="../plugins/datatables/jquery.dataTables.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
