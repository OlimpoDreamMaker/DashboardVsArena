<?php
require_once("../php/conexionBD.php");
$conexion = conectar();
$idProducto = $_GET['id'];
$consulta = "SELECT * FROM productos WHERE idProducto='$idProducto'";
$resultado = mysqli_query($conexion, $consulta);
$producto = mysqli_fetch_assoc($resultado);
$nombreProducto = $producto['producto'];
$precioEfectivo = $producto['precioEfectivo'];
$precioMonVirtual = $producto['precioMonVirtual'];
$stock = $producto['stock'];
$descripcion = $producto['descripcion'];
$imgProducto = $producto['imgProducto'];

desconectarBD($conexion);
?>
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
            <h1 class="m-0 text-dark">Producto</h1>
          </div>
          <!-- Titulo Page END -->

          <!-- Navegacion Pages START -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="./usuarios.php">Dashboard | VsArena</a></li>
              <li class="breadcrumb-item"><a href="./tienda.php">Tienda</a></li>
              <li class="breadcrumb-item active"><?php echo $nombreProducto;?></li>
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
          <div class="col-6">
            <h2 class="m-0 text-dark">Informacion <?php echo $nombreProducto;?></h2>
          </div>
        </div>
        <!--Subtitulo END-->

        <!-- Small boxes (Stat box) START-->
        <div class="row">

          <!-- Box 1 START -->
          <!--div class="col-lg-3 col-6">
            <div class="small-box bg-primary">
              <div class="inner">
                <h3>30</h3>
                <p>Cantidad Vendida</p>
              </div>
              <div class="icon">
                <i class="fas fa-trophy"></i>
              </div>
            </div>
          </div-->
          <!-- Box 1 END -->

        </div>       
        <!-- Small boxes (Stat box) END--> 

      </div>
      <!--Fluid END-->

      <!-- Vista Producto START -->
      <div class="card card-solid">

        <div class="card-body">
          <div class="row">

            <!-- Imagen Producto START -->
            <div class="col-12 col-sm-6">
              <div class="col-12">
                <img src="../../imgProductos/<?php echo $imgProducto;?>" class="product-image" alt="Product Image">
              </div>
            </div>
            <!-- Imagen Producto END -->

            <!-- Info Producto START -->
            <div class="col-12 col-sm-6">
              <h3 class="my-3"><?php echo $nombreProducto;?></h3>
              <p>
                <?php echo $descripcion;?>
              </p>

              <hr>
              <div class="bg-gray py-2 px-3 mt-4">
                <h2 class="mb-0">
                  Precio Efectivo: $<?php echo $precioEfectivo;?>
                </h2>
              </div>
              <div class="bg-gray py-2 px-3 mt-4">
                <h2 class="mb-0">
                  Precio Mon Virtual: <?php echo $precioMonVirtual;?>
                </h2>
              </div>
              <div class="mt-4">
                <div class="btn btn-default btn-lg btn-flat">
                  <i class="fas fa-boxes fa-lg mr-2"></i> 
                  Stock: <?php echo $stock;?>
                </div>

              </div>

            </div>
            <!-- Info Producto END -->

          </div>
        </div>
        
      </div>
      <!-- Vista Producto END -->

      <!--Fluid START-->
      <div class="container-fluid">
        
        <!--Subtitulo START-->
        <div class="row mb-4">
          <div class="col-12">
            <h2 class="m-0 text-dark">Acciones Producto - <?php echo $nombreProducto;?></h2>
          </div>
        </div>
        <!--Subtitulo END-->

        <!-- Formularios START -->
        <div class="row">

          <!-- Modificar Producto START -->
          <div class="col-md-12">
            
            <div class="card card-primary">

              <!-- Card Header START -->
              <div class="card-header">
                <h3 class="card-title">Modificar - <?php echo $nombreProducto;?></h3>
              </div>
              <!-- Card Header START -->

              <!-- Form START -->
              <form role="form" action="../php/modificarProducto.php?id=<?php ?>" method="POST" enctype="multipart/form-data">

                <!-- Card Body START -->
                <div class="row card-body">

                  <!-- Input Nombre Producto START -->
                  <div class="form-group col-6">
                    <label for="nombreProducto">Nombre Producto</label>
                    <input type="text" class="form-control" name="nombreProducto" id="nombreProducto" placeholder="<?php echo $nombreProducto;?>" required>
                  </div>
                  <!-- Input Nombre Producto END -->

                  <!-- Input Stock Producto START -->
                  <div class="form-group col-6">
                    <label for="stockProducto">Stock</label>
                    <input type="number" class="form-control" name="stockProducto" id="stockProducto" placeholder="<?php echo $stock;?>" required>
                  </div>
                  <!-- Input Stock Producto END -->

                  <!-- Input Precio Producto Efectivo START -->
                  <div class="form-group col-6">
                    <label for="precioProductoEfectivo">Precio Producto Efectivo</label>
                    <input type="text" class="form-control" name="precioProductoEfectivo" id="precioProductoEfectivo" placeholder="<?php echo $precioEfectivo;?>" required>
                  </div>
                  <!-- Input Precio Producto Efectivo END -->

                  <!-- Input Precio Producto MonVirtual START -->
                  <div class="form-group col-6">
                    <label for="precioProductoMonVirtual">Precio Producto Moneda Virutal</label>
                    <input type="text" class="form-control" name="precioProductoMonVirtual" id="precioProductoMonVirtual" placeholder="<?php echo $precioMonVirtual;?>" required>
                  </div>
                  <!-- Input Precio Producto MonVirtual END -->

                  <!-- Input Imgaen Producto START -->
                  <div class="form-group col-6">
                    <label for="foto">Agregar imagen</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="foto" id="foto" required>
                        <label class="custom-file-label" for="foto">Elija la imagen</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Subir</span>
                      </div>
                    </div>
                  </div>
                  <!-- Input Imgaen Producto END -->

                  <!-- Input Descripcion Producto START -->
                  <div class="form-group col-6">
                    <label for="descrpcionProducto">Descripcion Producto</label>
                    <textarea class="form-control" name="descripcionProducto" id="descrpcionProducto" rows="3" placeholder="<?php echo $descripcion;?>" required></textarea>
                  </div>
                  <!-- Input Descripcion Producto END -->

                </div>
                <!-- Card Body END -->

                <!-- Card Submit START -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Modificar Producto</button>
                </div>
                <!-- Card Submit END -->

              </form>
              <!-- Form END -->

            </div>

          </div>
          <!-- Modificar Producto END -->

          <!-- Eliminar Producto START -->
          <div class="col-6">
            <div class="card card-danger">

              <!-- Card Header START -->
              <div class="card-header">
                <h3 class="card-title">Eliminar Producto</h3>
              </div>
              <!-- Card Header END -->

              <!-- Subtitulo START -->
              <p class="m-2 text-dark">Ingrese su cuenta para eliminar el producto</p>
              <!-- Subtitulo END -->

              <!-- FORM START -->
              <form class="form-horizontal" action= "../php/eliminarProducto.php?id=<?php echo $idProducto;?>">

                <!-- Card Body START -->
                <div class="card-body">
                  <!-- Input Usuario START -->
                  <div class="form-group row">
                    <label for="usuario" class="col-4">Cuenta</label>
                    <div class="col-8">
                      <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Cuenta">
                    </div>
                  </div>
                  <!-- Input Usuario END -->

                  <!-- Input Contraseña START -->
                  <div class="form-group row">
                    <label for="password" class="col-4">Contraseña</label>
                    <div class="col-8">
                      <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña">
                    </div>
                  </div>
                  <!-- Input Contraseña END -->

                </div>
                <!-- Card Body END -->

                <!-- Submit START -->
                <div class="card-footer d-flex justify-content-center">
                  <button type="submit" class="btn btn-danger">Eliminar Producto</button>
                </div>
                <!-- Submit END -->

              </form>
              <!-- FORM END -->

            </div>
          </div>
          <!-- Eliminar Producto END -->

        </div>
        <!-- Formularios END -->

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
