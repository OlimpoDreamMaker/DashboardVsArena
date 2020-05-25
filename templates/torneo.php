<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Vs_Arena Dashboard-Torneo</title>
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

    <!-- Content Header (Page header) START -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">

          <!-- Titulo Page START -->
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Torneo {NombreTorneo}</h1>
          </div>
          <!-- Titulo Page END -->

          <!-- Navegacion Pages START -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="./usuarios.php">Dashboard | VsArena</a></li>
              <li class="breadcrumb-item"><a href="./torneos.php">Torneos</a></li>
              <li class="breadcrumb-item active">{NombreTorneo}</li>
            </ol>
          </div>
          <!-- Navegacion Pages END -->

        </div>
      </div>
    </div>
    <!-- Content Header (Page header) END -->
    
    <!-- Contento START -->
    <section class="content">
      <div class="container-fluid">
        
        <!--Subtitulo START-->
        <div class="row mb-4">
          <div class="col-6">
            <h2 class="m-0 text-dark">Informacion {NombreTorneo}</h2>
          </div>
        </div>
        <!--Subtitulo END-->

        <!-- Small boxes (Stat box) START -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3>30</h3>

                <p>Participantes Inscriptos</p>
              </div>
              <div class="icon">
                <i class="fas fa-trophy"></i>
              </div>
              <a href="#" class="small-box-footer">Ver Usuarios Inscriptos <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3><i class="fas fa-coins"></i> s/Premios</h3>
                <p>Premio</p>
              </div>
              <div class="icon">
                <i class="fas fa-trophy"></i>
              </div>
              <a href="#" class="small-box-footer">Ver Premios <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>16/05-18:00</h3>
                <p>Fecha de Inicio</p>
              </div>
              <div class="icon">
                <i class="fas fa-trophy"></i>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>20/05-20:00</h3>
                <p>Fecha de Fin</p>
              </div>
              <div class="icon">
                <i class="fas fa-trophy"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- Small boxes (Stat box) END -->

        <!-- Tabla Torneo START -->
        <div class="row">
          
          <!-- Tabla Torneo START -->
          <div class="col-12">
            <div class="card">

              <!-- Card Header START -->
              <div class="card-header">
                <h3 class="card-title">Torneo - {Nombre Torneo}</h3>
              </div>
              <!-- Card Header END -->
              
              <!-- Card Body START -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  
                  <!-- Cabecera Tabla Torneo START -->
                  <thead>
                  <tr>
                    <th>ID-Torneo</th>
                    <th>Juego</th>
                    <th>Cantidad permitida de Participantes</th>
                    <th>Fase de Grupos</th>
                    <th>Modalidad</th>
                    <th>Estado</th>
                  </tr>
                  </thead>
                  <!-- Cabecera Tabla Torneo END -->
                  
                  <!-- Contenido Tabla Torneo START -->
                  <tbody>
                  <tr>
                    <td>256</td>
                    <td><a href="./juego.php">LOL</a></td>
                    <td>40</td>
                    <td>SI</td>
                    <td>5 vs 5</td>
                    <td>A la espera</td>
                  </tr>
                  </tbody>
                  <!-- Cabecera Tabla Torneo END -->

                </table>
              </div>
              <!-- Card Body END -->

            </div>
          </div>
          <!-- Tabla Torneo END -->

        </div>
        <!-- Tablas Torneo END -->

        <!--Subtitulo START-->
        <div class="row mb-4">
          <div class="col-12">
            <h2 class="m-0 text-dark">Equipos Inscriptos</h2>
          </div>
        </div>
        <!--Subtitulo END-->

        <!-- Equipos START -->
        <div class="row">

          <!-- Mensaje si no hay Rondas START -->
          <div class="col-12 mb-4">
            <h2 class="text-center">Aun no se inscribieron equipos</h2>
          </div>
          <!-- Mensaje si no hay Rondas END -->

          <!-- Equipo START -->
          <div class="col-6">
            <div class="card">

              <!-- Card Header START -->
              <div class="card-header">
                <h3 class="card-title"><a href="./equipo.php">{Nombre de Equipo}</a></h3>
              </div>
              <!-- Card Header END -->
              
              <!-- Card Body START -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  
                  <!-- Cabecera Tabla Ronda START -->
                  <thead>
                  <tr>
                    <th>ID-Usuaio</th>
                    <th>Nombre Usuario</th>
                  </tr>
                  </thead>
                  <!-- Cabecera Tabla Ronda END -->
                  
                  <!-- Contenido Tabla Ronda START -->
                  <tbody>
                  <tr>
                    <td><a href="./usuario.php">038</a></td>
                    <td><a href="./usuario.php">Tornado323</a></td>
                  </tr>
                  <tr>
                    <td><a href="./usuario.php">127</a></td>
                    <td><a href="./usuario.php">xxXBlackGladiatorXxx</a></td>
                  </tr>
                  <tr>
                    <td><a href="./usuario.php">320</td>
                    <td><a href="./usuario.php">Thor123</a></td>
                  </tr>
                  <tr>
                    <td><a href="./usuario.php">415</a></td>
                    <td><a href="./usuario.php">Zeus2mil</a></td>
                  </tr>
                  <tr>
                    <td><a href="./usuario.php">369</a></td>
                    <td><a href="./usuario.php">BunnyFire</a></td>
                  </tr>
                  </tbody>
                  <!-- Cabecera Tabla Ronda END -->

                </table>
              </div>
              <!-- Card Body END -->

            </div>
          </div>
          <!-- Equipo START -->

          <!-- Equipo START -->
          <div class="col-6">
            <div class="card">

              <!-- Card Header START -->
              <div class="card-header">
                <h3 class="card-title"><a href="./equipo.php">{Nombre de Equipo}</a></h3>
              </div>
              <!-- Card Header END -->
              
              <!-- Card Body START -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  
                  <!-- Cabecera Tabla Ronda START -->
                  <thead>
                  <tr>
                    <th>ID-Usuaio</th>
                    <th>Nombre Usuario</th>
                  </tr>
                  </thead>
                  <!-- Cabecera Tabla Ronda END -->
                  
                  <!-- Contenido Tabla Ronda START -->
                  <tbody>
                  <tr>
                    <td><a href="./usuario.php">038</a></td>
                    <td><a href="./usuario.php">Tornado323</a></td>
                  </tr>
                  <tr>
                    <td><a href="./usuario.php">127</a></td>
                    <td><a href="./usuario.php">xxXBlackGladiatorXxx</a></td>
                  </tr>
                  <tr>
                    <td><a href="./usuario.php">320</td>
                    <td><a href="./usuario.php">Thor123</a></td>
                  </tr>
                  <tr>
                    <td><a href="./usuario.php">415</a></td>
                    <td><a href="./usuario.php">Zeus2mil</a></td>
                  </tr>
                  <tr>
                    <td><a href="./usuario.php">369</a></td>
                    <td><a href="./usuario.php">BunnyFire</a></td>
                  </tr>
                  </tbody>
                  <!-- Cabecera Tabla Ronda END -->

                </table>
              </div>
              <!-- Card Body END -->

            </div>
          </div>
          <!-- Equipo START -->

          <!-- Equipo START -->
          <div class="col-6">
            <div class="card">

              <!-- Card Header START -->
              <div class="card-header">
                <h3 class="card-title"><a href="./equipo.php">{Nombre de Equipo}</a></h3>
              </div>
              <!-- Card Header END -->
              
              <!-- Card Body START -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  
                  <!-- Cabecera Tabla Ronda START -->
                  <thead>
                  <tr>
                    <th>ID-Usuaio</th>
                    <th>Nombre Usuario</th>
                  </tr>
                  </thead>
                  <!-- Cabecera Tabla Ronda END -->
                  
                  <!-- Contenido Tabla Ronda START -->
                  <tbody>
                  <tr>
                    <td><a href="./usuario.php">038</a></td>
                    <td><a href="./usuario.php">Tornado323</a></td>
                  </tr>
                  <tr>
                    <td><a href="./usuario.php">127</a></td>
                    <td><a href="./usuario.php">xxXBlackGladiatorXxx</a></td>
                  </tr>
                  <tr>
                    <td><a href="./usuario.php">320</td>
                    <td><a href="./usuario.php">Thor123</a></td>
                  </tr>
                  <tr>
                    <td><a href="./usuario.php">415</a></td>
                    <td><a href="./usuario.php">Zeus2mil</a></td>
                  </tr>
                  <tr>
                    <td><a href="./usuario.php">369</a></td>
                    <td><a href="./usuario.php">BunnyFire</a></td>
                  </tr>
                  </tbody>
                  <!-- Cabecera Tabla Ronda END -->

                </table>
              </div>
              <!-- Card Body END -->

            </div>
          </div>
          <!-- Equipo START -->

          <!-- Equipo START -->
          <div class="col-6">
            <div class="card">

              <!-- Card Header START -->
              <div class="card-header">
                <h3 class="card-title"><a href="./equipo.php">{Nombre de Equipo}</a></h3>
              </div>
              <!-- Card Header END -->
              
              <!-- Card Body START -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  
                  <!-- Cabecera Tabla Ronda START -->
                  <thead>
                  <tr>
                    <th>ID-Usuaio</th>
                    <th>Nombre Usuario</th>
                  </tr>
                  </thead>
                  <!-- Cabecera Tabla Ronda END -->
                  
                  <!-- Contenido Tabla Ronda START -->
                  <tbody>
                  <tr>
                    <td><a href="./usuario.php">038</a></td>
                    <td><a href="./usuario.php">Tornado323</a></td>
                  </tr>
                  <tr>
                    <td><a href="./usuario.php">127</a></td>
                    <td><a href="./usuario.php">xxXBlackGladiatorXxx</a></td>
                  </tr>
                  <tr>
                    <td><a href="./usuario.php">320</td>
                    <td><a href="./usuario.php">Thor123</a></td>
                  </tr>
                  <tr>
                    <td><a href="./usuario.php">415</a></td>
                    <td><a href="./usuario.php">Zeus2mil</a></td>
                  </tr>
                  <tr>
                    <td><a href="./usuario.php">369</a></td>
                    <td><a href="./usuario.php">BunnyFire</a></td>
                  </tr>
                  </tbody>
                  <!-- Cabecera Tabla Ronda END -->

                </table>
              </div>
              <!-- Card Body END -->

            </div>
          </div>
          <!-- Equipo START -->


        </div>
        <!-- Equipos END -->

        <!--Subtitulo START-->
        <div class="row mb-4">
          <div class="col-12">
            <h2 class="m-0 text-dark">Grupos</h2>
          </div>
        </div>
        <!--Subtitulo END-->

        <!-- Grupos (en caso de haber) START -->
        <div class="row">

          <!-- Mensaje si no hay grupos START -->
          <div class="col-12 mb-4">
            <h2 class="text-center">Aun no se crearon Grupos</h2>
          </div>
          <!-- Mensaje si no hay grupos END -->

          <!-- Tabla Grupo 1 START -->
          <div class="col-6">
            <div class="card">

              <!-- Card Header START -->
              <div class="card-header">
                <h3 class="card-title"><a href="./grupo.php">Grupo 1</a></h3>
              </div>
              <!-- Card Header END -->
              
              <!-- Card Body START -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  
                  <!-- Cabecera Tabla Torneo START -->
                  <thead>
                  <tr>
                    <th>ID-Torneo</th>
                    <th>Equipo</th>
                    <th>Puntos</th>
                    <th>Resultado</th>
                    <th>Descalificar</th>
                  </tr>
                  </thead>
                  <!-- Cabecera Tabla Torneo END -->
                  
                  <!-- Contenido Tabla Torneo START -->
                  <tbody>
                  <tr>
                    <td><a href="./equipo.php">256</a></td>
                    <td><a href="./equipo.php">Fuego Rapido</a></td>
                    <td>5</td>
                    <td>V - D - E - V</td>
                    <td><a href="#"><i class="fas fa-trash-alt"></i></a></td>
                  </tr>
                  <tr>
                    <td><a href="./equipo.php">206</a></td>
                    <td><a href="./equipo.php">Las Estrellas</a></td>
                    <td>5</td>
                    <td>V - D - E - V</td>
                    <td><a href="#"><i class="fas fa-trash-alt"></i></a></td>
                  </tr>
                  <tr>
                    <td><a href="./equipo.php">056</a></td>
                    <td><a href="./equipo.php">Nube Negra</a></td>
                    <td>5</td>
                    <td>V - D - E - V</td>
                    <td><a href="#"><i class="fas fa-trash-alt"></i></a></td>
                  </tr>
                  <tr>
                    <td><a href="./equipo.php">060</a></td>
                    <td><a href="./equipo.php">Sol Naciente</a></td>
                    <td>5</td>
                    <td>V - D - E - V</td>
                    <td><a href="#"><i class="fas fa-trash-alt"></i></a></td>
                  </tr>
                  <tr>
                    <td><a href="./equipo.php">125</a></td>
                    <td><a href="./equipo.php">Frio Quemador</a></td>
                    <td>5</td>
                    <td>V - D - E - V</td>
                    <td><a href="#"><i class="fas fa-trash-alt"></i></a></td>
                  </tr>
                  </tbody>
                  <!-- Cabecera Tabla Torneo END -->

                </table>
              </div>
              <!-- Card Body END -->

            </div>
          </div>
          <!-- Tabla Grupo 1 END -->

          <!-- Tabla Grupo 2 START -->
          <div class="col-6">
            <div class="card">

              <!-- Card Header START -->
              <div class="card-header">
                <h3 class="card-title"><a href="./grupo.php">Grupo 2</a></h3>
              </div>
              <!-- Card Header END -->
              
              <!-- Card Body START -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  
                  <!-- Cabecera Tabla Torneo START -->
                  <thead>
                  <tr>
                    <th>ID-Torneo</th>
                    <th>Equipo</th>
                    <th>Puntos</th>
                    <th>Resultado</th>
                    <th>Descalificar</th>
                  </tr>
                  </thead>
                  <!-- Cabecera Tabla Torneo END -->
                  
                  <!-- Contenido Tabla Torneo START -->
                  <tbody>
                  <tr>
                    <td><a href="./equipo.php">256</a></td>
                    <td><a href="./equipo.php">Fuego Rapido</a></td>
                    <td>5</td>
                    <td>V - D - E - V</td>
                    <td><a href="#"><i class="fas fa-trash-alt"></i></a></td>
                  </tr>
                  <tr>
                    <td><a href="./equipo.php">206</a></td>
                    <td><a href="./equipo.php">Las Estrellas</a></td>
                    <td>5</td>
                    <td>V - D - E - V</td>
                    <td><a href="#"><i class="fas fa-trash-alt"></i></a></td>
                  </tr>
                  <tr>
                    <td><a href="./equipo.php">056</a></td>
                    <td><a href="./equipo.php">Nube Negra</a></td>
                    <td>5</td>
                    <td>V - D - E - V</td>
                    <td><a href="#"><i class="fas fa-trash-alt"></i></a></td>
                  </tr>
                  <tr>
                    <td><a href="./equipo.php">060</a></td>
                    <td><a href="./equipo.php">Sol Naciente</a></td>
                    <td>5</td>
                    <td>V - D - E - V</td>
                    <td><a href="#"><i class="fas fa-trash-alt"></i></a></td>
                  </tr>
                  <tr>
                    <td><a href="./equipo.php">125</a></td>
                    <td><a href="./equipo.php">Frio Quemador</a></td>
                    <td>5</td>
                    <td>V - D - E - V</td>
                    <td><a href="#"><i class="fas fa-trash-alt"></i></a></td>
                  </tr>
                  </tbody>
                  <!-- Cabecera Tabla Torneo END -->

                </table>
              </div>
              <!-- Card Body END -->

            </div>
          </div>
          <!-- Tabla Grupo 2 END -->

          <!-- Tabla Grupo 3 START -->
          <div class="col-6">
            <div class="card">

              <!-- Card Header START -->
              <div class="card-header">
                <h3 class="card-title"><a href="./grupo.php">Grupo 3</a></h3>
              </div>
              <!-- Card Header END -->
              
              <!-- Card Body START -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  
                  <!-- Cabecera Tabla Torneo START -->
                  <thead>
                  <tr>
                    <th>ID-Torneo</th>
                    <th>Equipo</th>
                    <th>Puntos</th>
                    <th>Resultado</th>
                    <th>Descalificar</th>
                  </tr>
                  </thead>
                  <!-- Cabecera Tabla Torneo END -->
                  
                  <!-- Contenido Tabla Torneo START -->
                  <tbody>
                  <tr>
                    <td><a href="./equipo.php">256</a></td>
                    <td><a href="./equipo.php">Fuego Rapido</a></td>
                    <td>5</td>
                    <td>V - D - E - V</td>
                    <td><a href="#"><i class="fas fa-trash-alt"></i></a></td>
                  </tr>
                  <tr>
                    <td><a href="./equipo.php">206</a></td>
                    <td><a href="./equipo.php">Las Estrellas</a></td>
                    <td>5</td>
                    <td>V - D - E - V</td>
                    <td><a href="#"><i class="fas fa-trash-alt"></i></a></td>
                  </tr>
                  <tr>
                    <td><a href="./equipo.php">056</a></td>
                    <td><a href="./equipo.php">Nube Negra</a></td>
                    <td>5</td>
                    <td>V - D - E - V</td>
                    <td><a href="#"><i class="fas fa-trash-alt"></i></a></td>
                  </tr>
                  <tr>
                    <td><a href="./equipo.php">060</a></td>
                    <td><a href="./equipo.php">Sol Naciente</a></td>
                    <td>5</td>
                    <td>V - D - E - V</td>
                    <td><a href="#"><i class="fas fa-trash-alt"></i></a></td>
                  </tr>
                  <tr>
                    <td><a href="./equipo.php">125</a></td>
                    <td><a href="./equipo.php">Frio Quemador</a></td>
                    <td>5</td>
                    <td>V - D - E - V</td>
                    <td><a href="#"><i class="fas fa-trash-alt"></i></a></td>
                  </tr>
                  </tbody>
                  <!-- Cabecera Tabla Torneo END -->

                </table>
              </div>
              <!-- Card Body END -->

            </div>
          </div>
          <!-- Tabla Grupo 3 END -->

          <!-- Tabla Grupo 4 START -->
          <div class="col-6">
            <div class="card">

              <!-- Card Header START -->
              <div class="card-header">
                <h3 class="card-title"><a href="./grupo.php">Grupo 4</a></h3>
              </div>
              <!-- Card Header END -->
              
              <!-- Card Body START -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  
                  <!-- Cabecera Tabla Torneo START -->
                  <thead>
                  <tr>
                    <th>ID-Torneo</th>
                    <th>Equipo</th>
                    <th>Puntos</th>
                    <th>Resultado</th>
                    <th>Descalificar</th>
                  </tr>
                  </thead>
                  <!-- Cabecera Tabla Torneo END -->
                  
                  <!-- Contenido Tabla Torneo START -->
                  <tbody>
                  <tr>
                    <td><a href="./equipo.php">256</a></td>
                    <td><a href="./equipo.php">Fuego Rapido</a></td>
                    <td>5</td>
                    <td>V - D - E - V</td>
                    <td><a href="#"><i class="fas fa-trash-alt"></i></a></td>
                  </tr>
                  <tr>
                    <td><a href="./equipo.php">206</a></td>
                    <td><a href="./equipo.php">Las Estrellas</a></td>
                    <td>5</td>
                    <td>V - D - E - V</td>
                    <td><a href="#"><i class="fas fa-trash-alt"></i></a></td>
                  </tr>
                  <tr>
                    <td><a href="./equipo.php">056</a></td>
                    <td><a href="./equipo.php">Nube Negra</a></td>
                    <td>5</td>
                    <td>V - D - E - V</td>
                    <td><a href="#"><i class="fas fa-trash-alt"></i></a></td>
                  </tr>
                  <tr>
                    <td><a href="./equipo.php">060</a></td>
                    <td><a href="./equipo.php">Sol Naciente</a></td>
                    <td>5</td>
                    <td>V - D - E - V</td>
                    <td><a href="#"><i class="fas fa-trash-alt"></i></a></td>
                  </tr>
                  <tr>
                    <td><a href="./equipo.php">125</a></td>
                    <td><a href="./equipo.php">Frio Quemador</a></td>
                    <td>5</td>
                    <td>V - D - E - V</td>
                    <td><a href="#"><i class="fas fa-trash-alt"></i></a></td>
                  </tr>
                  </tbody>
                  <!-- Cabecera Tabla Torneo END -->

                </table>
              </div>
              <!-- Card Body END -->

            </div>
          </div>
          <!-- Tabla Grupo 4 END -->      

        </div>
        <!-- Grupos (en caso de haber) END -->


        <!--Subtitulo START-->
        <div class="row mb-4">
          <div class="col-6">
            <h2 class="m-0 text-dark">Rondas</h2>
          </div>
        </div>
        <!--Subtitulo END-->

        <!-- Rondas START -->
        <div class="row">

          <!-- Mensaje si no hay Rondas START -->
          <div class="col-12 mb-4">
            <h2 class="text-center">Aun no se crearon Rondas</h2>
          </div>
          <!-- Mensaje si no hay Rondas END -->

          <!-- Ronda Octavos de Final START -->
          <div class="col-12">
            <div class="card">

              <!-- Card Header START -->
              <div class="card-header">
                <h3 class="card-title"><a href="./rondas.php">Octavos de Final</a></h3>
              </div>
              <!-- Card Header END -->
              
              <!-- Card Body START -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  
                  <!-- Cabecera Tabla Ronda START -->
                  <thead>
                  <tr>
                    <th>Equipo A</th>
                    <th>Equipo B</th>
                    <th>Fecha</th>
                    <th>Ganador</th>
                  </tr>
                  </thead>
                  <!-- Cabecera Tabla Ronda END -->
                  
                  <!-- Contenido Tabla Ronda START -->
                  <tbody>
                  <tr>
                    <td><a href="./equipo.php">LLuvia Inesperada</a></td>
                    <td><a href="./equipo.php">Fuego Rapido</a></td>
                    <td>20/06 18:00</td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <td><a href="./equipo.php">Mar sin Agua</a></td>
                    <td><a href="./equipo.php">Las Estrellas</a></td>
                    <td>20/06 18:00</td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <td><a href="./equipo.php">Lluvia Eterna</a></td>
                    <td><a href="./equipo.php">Nube Negra</a></td>
                    <td>20/06 18:00</td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <td><a href="./equipo.php">Mente en Llamas</a></td>
                    <td><a href="./equipo.php">Sol Naciente</a></td>
                    <td>20/06 18:00</td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <td><a href="./equipo.php">Manda Artica</a></td>
                    <td><a href="./equipo.php">Frio Quemador</a></td>
                    <td>20/06 18:00</td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <td><a href="./equipo.php">Lluvia Eterna</a></td>
                    <td><a href="./equipo.php">Nube Negra</a></td>
                    <td>20/06 18:00</td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <td><a href="./equipo.php">Mente en Llamas</a></td>
                    <td><a href="./equipo.php">Sol Naciente</a></td>
                    <td>20/06 18:00</td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <td><a href="./equipo.php">Manda Artica</a></td>
                    <td><a href="./equipo.php">Frio Quemador</a></td>
                    <td>20/06 18:00</td>
                    <td>-</td>
                  </tr>
                  </tbody>
                  <!-- Cabecera Tabla Ronda END -->

                </table>
              </div>
              <!-- Card Body END -->

            </div>
          </div>
          <!-- Ronda Octavos de Final START -->

          <!-- Ronda Cuartos de Final START -->
          <div class="col-12">
            <div class="card">

              <!-- Card Header START -->
              <div class="card-header">
                <h3 class="card-title"><a href="./rondas.php">Cuartos de Final</a></h3>
              </div>
              <!-- Card Header END -->
              
              <!-- Card Body START -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  
                  <!-- Cabecera Tabla Ronda START -->
                  <thead>
                  <tr>
                    <th>Equipo A</th>
                    <th>Equipo B</th>
                    <th>Fecha</th>
                    <th>Ganador</th>
                  </tr>
                  </thead>
                  <!-- Cabecera Tabla Ronda END -->
                  
                  <!-- Contenido Tabla Ronda START -->
                  <tbody>
                  <tr>
                    <td><a href="./equipo.php">LLuvia Inesperada</a></td>
                    <td><a href="./equipo.php">Fuego Rapido</a></td>
                    <td>20/06 18:00</td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <td><a href="./equipo.php">Mar sin Agua</a></td>
                    <td><a href="./equipo.php">Las Estrellas</a></td>
                    <td>20/06 18:00</td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <td><a href="./equipo.php">Lluvia Eterna</a></td>
                    <td><a href="./equipo.php">Nube Negra</a></td>
                    <td>20/06 18:00</td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <td><a href="./equipo.php">Mente en Llamas</a></td>
                    <td><a href="./equipo.php">Sol Naciente</a></td>
                    <td>20/06 18:00</td>
                    <td>-</td>
                  </tr>
                  </tbody>
                  <!-- Cabecera Tabla Ronda END -->

                </table>
              </div>
              <!-- Card Body END -->

            </div>
          </div>
          <!-- Ronda Cuartos de Final START -->

          <!-- Ronda SemiFinal START -->
          <div class="col-12">
            <div class="card">

              <!-- Card Header START -->
              <div class="card-header">
                <h3 class="card-title"><a href="./rondas.php">SemiFinal</a></h3>
              </div>
              <!-- Card Header END -->
              
              <!-- Card Body START -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  
                  <!-- Cabecera Tabla Torneo START -->
                  <thead>
                  <tr>
                    <th>Equipo A</th>
                    <th>Equipo B</th>
                    <th>Fecha</th>
                    <th>Ganador</th>
                  </tr>
                  </thead>
                  <!-- Cabecera Tabla Torneo END -->
                  
                  <!-- Contenido Tabla Torneo START -->
                  <tbody>
                  <tr>
                    <td><a href="./equipo.php">LLuvia Inesperada</a></td>
                    <td><a href="./equipo.php">Fuego Rapido</a></td>
                    <td>20/06 18:00</td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <td><a href="./equipo.php">Mar sin Agua</a></td>
                    <td><a href="./equipo.php">Las Estrellas</a></td>
                    <td>20/06 18:00</td>
                    <td>-</td>
                  </tr>
                  </tbody>
                  <!-- Cabecera Tabla Torneo END -->

                </table>
              </div>
              <!-- Card Body END -->

            </div>
          </div>
          <!-- Ronda SemiFinal START -->

          <!-- Ronda Final START -->
          <div class="col-12">
            <div class="card">

              <!-- Card Header START -->
              <div class="card-header">
                <h3 class="card-title"><a href="./rondas.php">Final</a></h3>
              </div>
              <!-- Card Header END -->
              
              <!-- Card Body START -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  
                  <!-- Cabecera Tabla Ronda START -->
                  <thead>
                  <tr>
                    <th>Equipo A</th>
                    <th>Equipo B</th>
                    <th>Fecha</th>
                    <th>Ganador</th>
                  </tr>
                  </thead>
                  <!-- Cabecera Tabla Ronda END -->
                  
                  <!-- Contenido Tabla Ronda START -->
                  <tbody>
                  <tr>
                    <td><a href="./equipo.php">LLuvia Inesperada</a></td>
                    <td><a href="./equipo.php">Fuego Rapido</a></td>
                    <td>20/06 18:00</td>
                    <td>-</td>
                  </tr>
                  </tbody>
                  <!-- Cabecera Tabla Ronda END -->

                </table>
              </div>
              <!-- Card Body END -->

            </div>
          </div>
          <!-- Ronda Final START -->

        </div>
        <!-- Rondas END -->

        <!--Subtitulo START-->
        <div class="row mb-4">
          <div class="col-6">
            <h2 class="m-0 text-dark">Premios</h2>
          </div>
        </div>
        <!--Subtitulo END-->

        <!-- Premios START -->
        <div class="row">

          <!-- Mensaje si no hay Premios START -->
          <div class="col-12 mb-4">
            <h2 class="text-center">Aun no se crearon Premio</h2>
          </div>
          <!-- Mensaje si no hay Premios END -->
          
          <!-- Tabala Premios START -->
          <div class="col-12">
            <div class="card">

              <!-- Card Header START -->
              <div class="card-header">
                <h3 class="card-title">Premios</h3>
              </div>
              <!-- Card Header END -->
              
              <!-- Card Body START -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  
                  <!-- Cabecera Tabla Premios START -->
                  <thead>
                  <tr>
                    <th>Nombre Premio</th>
                    <th>Descripcion</th>
                    <th>Entregado</th>
                  </tr>
                  </thead>
                  <!-- Cabecera Tabla Premios END -->
                  
                  <!-- Contenido Tabla Premios START -->
                  <tbody>
                  <tr>
                    <td><a href="./premio.php">Primer Puesto</a></td>
                    <td>10000 Monedas Virtuales</td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <td><a href="./premio.php">Segundo Puesto</a></td>
                    <td>5000 Monedas Virtuales</td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <td><a href="./premio.php">Tercer Puesto</a></td>
                    <td>3000 Monedas Virtuales</td>
                    <td>-</td>
                  </tr>
                  </tbody>
                  <!-- Cabecera Tabla Premios END -->

                </table>
              </div>
              <!-- Card Body END -->

            </div>
          </div>
          <!-- Tabla Premio END -->

        </div>
        <!-- Premios END -->
        
        <!--Subtitulo START-->
        <div class="row mb-4">
          <div class="col-6">
            <h2 class="m-0 text-dark">Acciones Torneo {NombreTorneo}</h2>
          </div>
        </div>
        <!--Subtitulo END-->
        
        <!-- Acciones Torneos START -->
        <div class="row">

          <!-- Modificar Torneo START -->
          <div class="col-md-12">
            <div class="card card-primary">
              
              <!-- Card Header START -->
              <div class="card-header">
                <h3 class="card-title">Modificar Torneo ChampionsLegue</h3>
              </div>
              <!-- Card Header END -->

              <!-- Form START -->
              <form role="form">
                
                <!-- Card Body START -->
                <div class="row card-body">

                  <!-- Input Nombre Torneo START -->
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Nombre Torneo</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nombre Torneo...">
                  </div>
                  <!-- Input Nombre Torneo END -->

                  <!-- Input Juego START -->
                  <div class="form-group col-6">
                    <label for="exampleInputPassword1">Juego</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Juego...">
                  </div>
                  <!-- Input Juego END -->

                  <!-- Input Cant de Participantes START -->
                  <div class="form-group col-6">
                    <label for="exampleInputPassword1">Cantidad de Participantes</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Cantidad de Participantes...">
                  </div>
                  <!-- Input Cant de Participantes END -->

                  <!-- Input Modalidad START -->
                  <div class="form-group col-6">
                    <label>Modalidad</label>
                    <select class="form-control">
                      <option>1 vs 1</option>
                      <option>2 vs 2</option>
                      <option>3 vs 3</option>
                      <option>4 vs 4</option>
                      <option>5 vs 5</option>
                      <option>6 vs 6</option>
                    </select>
                  </div>
                  <!-- Input Modalidad END -->

                  <!-- Input Fecha START -->
                  <div class="form-group col-6">
                    <label>Fecha y hora de Rango:</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-clock"></i></span>
                      </div>
                      <input type="text" class="form-control float-right" id="reservationtime">
                    </div>
                  </div>
                  <!-- Input Fecha END -->

                </div>
                <!-- Card Body END -->

                <!-- Submit START -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Modificar Torneo</button>
                </div>
                <!-- Submit END -->

              </form>
              <!-- Form END -->

            </div>
          </div>
          <!-- Modificar Torneo END -->

          <!-- Cancelar Torneo START -->
          <div class="col-6">
            <div class="card card-warning">
              
              <!-- Card Header START -->
              <div class="card-header">
                <h3 class="card-title">Cancelar Torneo</h3>
              </div>
              <!-- Card Header END -->

              <p class="m-2 text-dark">Ingrese su cuenta para cancelar el torneo</p>
              
              <!-- Form START -->
              <form class="form-horizontal">
                
                <!-- Card Body START -->
                <div class="card-body">

                  <!-- Input Usuario START -->
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-4">Cuenta</label>
                    <div class="col-8">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="Cuenta">
                    </div>
                  </div>
                  <!-- Input Usuario END -->

                  <!-- Input Contraseña START -->
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-4">Contraseña</label>
                    <div class="col-8">
                      <input type="password" class="form-control" id="inputPassword3" placeholder="Contraseña">
                    </div>
                  </div>
                  <!-- Input Contraseña END -->
                </div>
                <!-- Card Body END -->

                <!-- Submit START -->
                <div class="card-footer d-flex justify-content-center">
                  <button type="submit" class="btn btn-warning">Cancelar Torneo</button>
                </div>
                <!-- Submit END -->

              </form>
              <!-- Form END -->
            </div>
          </div>
          <!-- Cancelar Torneo END -->

          <!-- Eliminar Torneo START -->
          <div class="col-6">
            <div class="card card-danger">
              
              <!-- Card Header START -->
              <div class="card-header">
                <h3 class="card-title">Eliminar torneo</h3>
              </div>
              <!-- Card Header END -->

              <p class="m-2 text-dark">Ingrese su cuenta para eliminar el torneo</p>

              <!-- Form START -->
              <form class="form-horizontal">

                <!-- Card Body START -->
                <div class="card-body">

                  <!-- Input Usuario START -->
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-4">Cuenta</label>
                    <div class="col-8">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="Cuenta">
                    </div>
                  </div>
                  <!-- Input Usuario END -->

                  <!-- Input Contraseña START -->
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-4">Contraseña</label>
                    <div class="col-8">
                      <input type="password" class="form-control" id="inputPassword3" placeholder="Contraseña">
                    </div>
                  </div>
                  <!-- Input Contraseña END -->

                </div>
                <!-- Card Body END -->

                <!-- Submit START -->
                <div class="card-footer d-flex justify-content-center">
                  <button type="submit" class="btn btn-danger">Eliminar Torneo</button>
                </div>
                <!-- Submit END -->

              </form>
              <!-- Form END -->
            </div>
          </div>
          <!-- Eliminar Torneo END -->

          <!-- Crear Grupo START -->
          <div class="col-6">
            <div class="card card-success">
              
              <!-- Card Header START -->
              <div class="card-header">
                <h3 class="card-title">Crear Grupo</h3>
              </div>
              <!-- Card Header END -->

              <!-- Form START -->
              <form class="form-horizontal">

                <!-- Card Body START -->
                <div class="card-body">

                  <!-- Input Nombre Grupo START -->
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-4">Nombre Grupo</label>
                    <div class="col-8">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="Nombre Grupo">
                    </div>
                  </div>
                  <!-- Input Nombre Grupo END -->
                  
                </div>
                <!-- Card Body END -->

                <!-- Submit START -->
                <div class="card-footer d-flex justify-content-center">
                  <button type="submit" class="btn btn-success">Crear Grupo</button>
                </div>
                <!-- Submit END -->

              </form>
              <!-- Form END -->
            </div>
          </div>
          <!-- Crear Grupo END -->

          <!-- Crear Ronda START -->
          <div class="col-6">
            <div class="card card-success">
              
              <!-- Card Header START -->
              <div class="card-header">
                <h3 class="card-title">Crear Ronda</h3>
              </div>
              <!-- Card Header END -->

              <!-- Form START -->
              <form class="form-horizontal">

                <!-- Card Body START -->
                <div class="card-body">

                  <!-- Input Nombre Grupo START -->
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-4">Nombre Ronda</label>
                    <div class="col-8">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="Nombre Ronda">
                    </div>
                  </div>
                  <!-- Input Nombre Grupo END -->
                  
                </div>
                <!-- Card Body END -->

                <!-- Submit START -->
                <div class="card-footer d-flex justify-content-center">
                  <button type="submit" class="btn btn-success">Crear Ronda</button>
                </div>
                <!-- Submit END -->

              </form>
              <!-- Form END -->
            </div>
          </div>
          <!-- Crear Ronda END -->

          <!-- Crear Ronda START -->
          <div class="col-6">
            <div class="card card-success">
              
              <!-- Card Header START -->
              <div class="card-header">
                <h3 class="card-title">Crear Premio</h3>
              </div>
              <!-- Card Header END -->

              <!-- Form START -->
              <form class="form-horizontal">

                <!-- Card Body START -->
                <div class="card-body">

                  <!-- Input Nombre Premio START -->
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-4">Nombre Premio</label>
                    <div class="col-8">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="Nombre Premio">
                    </div>
                  </div>
                  <!-- Input Nombre Premio END -->

                  <!-- Input Detalles Premio START -->
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-4">Detalles Premio</label>
                    <div class="col-8">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="Detalles Premio">
                    </div>
                  </div>
                  <!-- Input Nombre Grupo END -->
                  
                </div>
                <!-- Card Body END -->

                <!-- Submit START -->
                <div class="card-footer d-flex justify-content-center">
                  <button type="submit" class="btn btn-success">Crear Premio</button>
                </div>
                <!-- Submit END -->

              </form>
              <!-- Form END -->
            </div>
          </div>
          <!-- Crear Ronda END -->

        </div>
        <!-- Acciones Torneos END -->

        <!--Subtitulo START-->
        <div class="row mt-4 mb-4">
          <div class="col-12">
            <h2 class="m-0 text-dark">Enviar un email a los participantes de {Nombre Torneo}</h2>
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
    </section>
    <!-- Contento END -->

  </div>
  <!-- Content Wrapper. Contains page content END-->

  <!--FOOTER START-->
  <?php
  require_once("../components/footer.php");
  ?>
  <!--FOOTER END-->

</div>
<!-- Wrapper END -->



<!--SCRIPTS-->
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
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
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
    $('#datemask2').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
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
        format: 'DD/MM/YYYY hh:mm A'
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