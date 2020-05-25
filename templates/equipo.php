<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>VsArena | Dashboard-Torneo</title>
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

  <!-- Content Wrapper. Contains page content START-->
  <div class="content-wrapper">

    <!-- Content Header (Page header) START-->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">

          <!-- Titulo Page START -->
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Equipo {Nombre Equipo}</h1>
          </div>
          <!-- Titulo Page END -->

          <!-- Navegacion Pages START -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="./usuarios.php">Dashboard | VsArena</a></li>
              <li class="breadcrumb-item active">{Nombre Equipo}</li>
            </ol>
          </div>
          <!-- Navegacion Pages END -->

        </div>
      </div>
    </div>
    <!-- Content Header (Page header) END-->
    
    <!--Content START-->
    <section class="content">

      <!--Fluid START-->
      <div class="container-fluid">

         <!--Subtitulo START-->
         <div class="row mb-4">
          <div class="col-12">
            <h2 class="m-0 text-dark">Integrandes del equipo</h2>
          </div>
        </div>
        <!--Subtitulo END-->

        <!-- Tabla Integrantes START -->
        <div class="row">
          <div class="col-12">
            <div class="card">

              <!-- Card Header START -->
              <div class="card-header">
                <h3 class="card-title">Integrantes</h3>
              </div>
              <!-- Card Header END -->
              
              <!-- Card Body START -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  
                  <!-- Cabecera Tabla Equipos START -->
                  <thead>
                  <tr>
                    <th>ID-Usuario</th>
                    <th>Usuario</th>
                    <th>Email</th>
                  </tr>
                  </thead>
                  <!-- Cabecera Tabla Equipos END -->
                  
                  <!-- Contenido Tabla Equipos START -->
                  <tbody>
                  <tr>
                    <td><a href="./usuario.php">256</a></td>
                    <td><a href="./usuario.php">Brandon</a></td>
                    <td>brandon@email.com</td>
                  </tr>
                  <tr>
                    <td><a href="./usuario.php">056</a></td>
                    <td><a href="./usuario.php">Adalis</a></td>
                    <td>adalis@email.com</td>
                  </tr>
                  <tr>
                    <td><a href="./usuario.php">300</a></td>
                    <td><a href="./usuario.php">Espartano27</a></td>
                    <td>esparta@email.com</td>
                  </tr>
                  <tr>
                    <td><a href="./usuario.php">206</a></td>
                    <td><a href="./usuario.php">Robert00</a></td>
                    <td>robert00@email.com</td>
                  </tr>
                  <tr>
                    <td><a href="./usuario.php">560</a></td>
                    <td><a href="./usuario.php">Allison</a></td>
                    <td>allison60@email.com</td>
                  </tr>
                  </tbody>
                  <!-- Cabecera Tabla Torneo END -->

                </table>
              </div>
              <!-- Card Body END -->

            </div>
          </div>  
        </div>
        <!-- Tabla Integrantes END -->

        <!--Subtitulo START-->
        <div class="row mb-4">
          <div class="col-12">
            <h2 class="m-0 text-dark">Torneos en los que Participo</h2>
          </div>
        </div>
        <!--Subtitulo END-->

        <!-- Torneos en los que Participo START -->
        <div class="row">
          <!-- Tabla Compras START -->
          <div class="col-12">

            <!-- Card START -->
            <div class="card">
              
              <!-- Card Header START -->
              <div class="card-header">
                <h3 class="card-title">Torneos</h3>
              </div>
              <!-- Card Header END -->

              <!-- Card Body START -->
              <div class="card-body">
                <table id="example3" class="table table-bordered table-hover">
                  
                  <!-- Cabecera Tabla Ventas START -->
                  <thead>
                  <tr>
                    <th>ID-Torneo</th>
                    <th>Nombre Torneo</th>
                    <th>Juego</th>
                    <th>Cantidad de Participantes</th>
                    <th>Estado</th>
                    <th>Modalidad</th>
                  </tr>
                  </thead>
                  <!-- Cabecera Tabla Ventas END -->
                  
                  <!-- Contenido Ventas START -->
                  <tbody>
                  <tr>
                    <td><a href="./torneo.php">256</a></td>
                    <td><a href="./torneo.php">Champions League</a></td>
                    <td><a href="./juego.php">LOL</a></td>
                    <td>40</td>
                    <td>En Espera</td>
                    <td>5 vs 5</td>
                  </tr>
                  <tr>
                    <td><a href="./torneo.php">125</a></td>
                    <td><a href="./torneo.php">Fire in House</a></td>
                    <td><a href="./juego.php">CS:GO</a></td>
                    <td>30</td>
                    <td>Concluido</td>
                    <td>3 vs 3</td>
                  </tr>
                  <tr>
                    <td><a href="./torneo.php">056</a></td>
                    <td><a href="./torneo.php">La ultima bala</a></td>
                    <td><a href="./juego.php">Free Fire</a></td>
                    <td>32</td>
                    <td>Activo</td>
                    <td>Todos vs Todos</td>
                  </tr>
                  </tbody>
                  <!-- Contenido Ventas END -->

                </table>
              </div>
              <!-- Card Body END -->

            </div>
            <!-- Card END -->

          </div>
          <!-- Tabla Compras END -->
        </div>
        <!-- Torneos en los que Participo END -->

        <!--Subtitulo START-->
        <div class="row mt-4 mb-4">
          <div class="col-12">
            <h2 class="m-0 text-dark">Enviar un email al equipo {Nombre Equipo}</h2>
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
      <!--Fluid END-->

    </section>
    <!--Content END-->

  </div>
  <!-- Content Wrapper. Contains page content END-->

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
<!-- Select2 -->
<script src="../plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- date-range-picker -->
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
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
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });
    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })
    
    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

  });
</script>
</body>
</html>