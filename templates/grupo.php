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
            <h1 class="m-0 text-dark">Torneo {Nombre Torneo} - {Nombre Grupo}</h1>
          </div>
          <!-- Titulo Page END -->

          <!-- Navegacion Pages START -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard | VsArena</a></li>
              <li class="breadcrumb-item"><a href="#">Torneos</a></li>
              <li class="breadcrumb-item"><a href="#">{Nombre Torneo}</a></li>
              <li class="breadcrumb-item active">{Grupo}</li>
            </ol>
          </div>
          <!-- Navegacion Pages END -->

        </div>
      </div>
    </div>
    <!-- Content Header (Page header) END -->
    
    <!-- Content START -->
    <section class="content">
      <div class="container-fluid">
        
        <!--Subtitulo START-->
        <div class="row mb-4">
          <div class="col-6">
            <h2 class="m-0 text-dark">Informacion {Nombre Grupo}</h2>
          </div>
        </div>
        <!--Subtitulo END-->

        <!-- Tablas START -->
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
                    <th>ID</th>
                    <th>Juego</th>
                    <th>Cantidad permitida de Participantes</th>
                    <th>Fase de Grupos</th>
                    <th>Premios</th>
                    <th>Modalidad</th>
                    <th>Estado</th>
                  </tr>
                  </thead>
                  <!-- Cabecera Tabla Torneo END -->
                  
                  <!-- Contenido Tabla Torneo START -->
                  <tbody>
                  <tr>
                    <td>256</td>
                    <td><a href="#">LOL</a></td>
                    <td>40</td>
                    <td>SI</td>
                    <td><a href="#">Ver Premios</a></td>
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
        <!-- Tablas END -->


        <!-- Tabla Grupo START -->
        <div class="row">

          <!-- Columna 6 START -->
          <div class="col-6">

            <!-- Subtitulo START -->
            <h2 class="m-0 mb-4 text-dark">Tabla Grupo {Nombre Grupo}</h2>
            <!-- Subtitulo END -->

            <!-- Tabla Grupo START -->
            <div class="card">

              <!-- Card Header START -->
              <div class="card-header">
                <h3 class="card-title">Grupo 1</h3>
              </div>
              <!-- Card Header END -->
              
              <!-- Card Body START -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  
                  <!-- Cabecera Tabla Torneo START -->
                  <thead>
                  <tr>
                    <th>ID</th>
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
                    <td>256</td>
                    <td><a href="#">Fuego Rapido</a></td>
                    <td>5</td>
                    <td>V - D - E - V</td>
                    <td><a href="#"><i class="fas fa-trash-alt"></i></a></td>
                  </tr>
                  <tr>
                    <td>206</td>
                    <td><a href="#">Las Estrellas</a></td>
                    <td>5</td>
                    <td>V - D - E - V</td>
                    <td><a href="#"><i class="fas fa-trash-alt"></i></a></td>
                  </tr>
                  <tr>
                    <td>056</td>
                    <td><a href="#">Nube Negra</a></td>
                    <td>5</td>
                    <td>V - D - E - V</td>
                    <td><a href="#"><i class="fas fa-trash-alt"></i></a></td>
                  </tr>
                  <tr>
                    <td>060</td>
                    <td><a href="#">Sol Naciente</a></td>
                    <td>5</td>
                    <td>V - D - E - V</td>
                    <td><a href="#"><i class="fas fa-trash-alt"></i></a></td>
                  </tr>
                  <tr>
                    <td>125</td>
                    <td><a href="#">Frio Quemador</a></td>
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
            <!-- Tabla Grupo END -->    

            <!-- Subtitulo START -->
            <h2 class="m-0 mb-4 text-dark">Tabla Equipos Insciptos</h2>
            <!-- Subtitulo END -->

            <!-- Tabla Equipos START -->
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
                    <th>Agregar al Grupo</th>
                  </tr>
                  </thead>
                  <!-- Cabecera Tabla Equipos END -->
                  
                  <!-- Contenido Tabla Equipos START -->
                  <tbody>
                  <tr>
                    <td>256</td>
                    <td><a href="#">Fuego Rapido</a></td>
                    <td><a href="#"><i class="fas fa-plus"></i></a></td>
                  </tr>
                  <tr>
                    <td>206</td>
                    <td><a href="#">Las Estrellas</a></td>
                    <td><a href="#"><i class="fas fa-plus"></i></a></td>
                  </tr>
                  <tr>
                    <td>056</td>
                    <td><a href="#">Nube Negra</a></td>
                    <td><a href="#"><i class="fas fa-plus"></i></a></td>
                  </tr>
                  <tr>
                    <td>060</td>
                    <td><a href="#">Sol Naciente</a></td>
                    <td><a href="#"><i class="fas fa-plus"></i></a></td>
                  </tr>
                  <tr>
                    <td>125</td>
                    <td><a href="#">Frio Quemador</a></td>
                    <td><a href="#"><i class="fas fa-plus"></i></a></td>
                  </tr>
                  </tbody>
                  <!-- Cabecera Tabla Torneo END -->

                </table>
              </div>
              <!-- Card Body END -->

            </div>
            <!-- Tabla Grupo END -->  

          </div>
          <!-- Columna 6 END -->
          
          <!-- Columna 6 START -->
          <div class="col-6">

            <!-- Subtitulo START -->
            <h2 class="m-0 mb-4 text-dark">Enfrentamientos de {NombreGrupo}</h2>
            <!-- Subtitulo END -->

            <!-- Tabla Enfrentamientos START -->
            <div class="card">

              <!-- Card Header START -->
              <div class="card-header">
                <h3 class="card-title">Enfrentamientos Grupo 1</h3>
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
                    <th>Resultado</th>
                  </tr>
                  </thead>
                  <!-- Cabecera Tabla Torneo END -->
                  
                  <!-- Contenido Tabla Torneo START -->
                  <tbody>
                  <tr>
                    <td><a href="#">Las Estrellas</a></td>
                    <td><a href="#">Fuego Rapido</a></td>
                    <td>16/04/20 18:00</td>
                    <td>Victoria para <a href="#">Fuego Rapido</a></td>
                  </tr>
                  <tr>
                    <td><a href="#">Las Estrellas</a></td>
                    <td><a href="#">Nube Negra</a></td>
                    <td>16/04/20 18:00</td>
                    <td>Victoria para <a href="#">Las Estrellas</a></td>
                  </tr>
                  <tr>
                    <td><a href="#">Las Estrellas</a></td>
                    <td><a href="#">Sol Naciente</a></td>
                    <td>16/04/20 18:00</td>
                    <td>Empate</td>
                  </tr>
                  <tr>
                    <td><a href="#">Las Estrellas</a></td>
                    <td><a href="#">Frio Quemador</a></td>
                    <td>16/04/20 18:00</td>
                    <td>Victoria para <a href="#">Las Estrellas</a></td>
                  </tr>
                  <tr>
                    <td><a href="#">Sol Naciente</a></td>
                    <td><a href="#">Frio Quemador</a></td>
                    <td>16/04/20 18:00</td>
                    <td>Victoria para <a href="#">Sol Naciente</a></td>
                  </tr>
                  <tr>
                    <td><a href="#">Nube Negra</a></td>
                    <td><a href="#">Frio Quemador</a></td>
                    <td>16/04/20 18:00</td>
                    <td>Empate</td>
                  </tr>
                  <tr>
                    <td><a href="#">Fuego Rapido</a></td>
                    <td><a href="#">Frio Quemador</a></td>
                    <td>16/04/20 18:00</td>
                    <td>Victoria para <a href="#">Frio Quemador</a></td>
                  </tr>
                  <tr>
                    <td><a href="#">Fuego Rapido</a></td>
                    <td><a href="#">Nube Negra</a></td>
                    <td>16/04/20 18:00</td>
                    <td>Victoria para <a href="#">Fuego Rapido</a></td>
                  </tr>
                  <tr>
                    <td><a href="#">Fuego Rapido</a></td>
                    <td><a href="#">Sol Naciente</a></td>
                    <td>16/04/20 18:00</td>
                    <td>Victoria para <a href="#">Fuego Rapido</a></td>
                  </tr>
                  <tr>
                    <td><a href="#">Nube Negra</a></td>
                    <td><a href="#">Sol Naciente</a></td>
                    <td>16/04/20 18:00</td>
                    <td>Empate</td>
                  </tr>
                  </tbody>
                  <!-- Cabecera Tabla Torneo END -->

                </table>
              </div>
              <!-- Card Body END -->

            </div>
            <!-- Tabla Enfrentamientos  END -->
          </div>
          <!-- Columna 6 END -->

        </div>
        <!-- Tabla Grupo END -->

        <!--Subtitulo START-->
        <div class="row mb-4">
          <div class="col-12">
            <h2 class="m-0 text-dark">Acciones a Grupo</h2>
          </div>
        </div>
        <!--Subtitulo END-->

        <!-- Acciones Grupo START -->
        <div class="row">

          <!-- Eliminar Grupo START -->
          <div class="col-6">
            <div class="card card-danger">
              
              <!-- Card Header START -->
              <div class="card-header">
                <h3 class="card-title">Eliminar Grupo</h3>
              </div>
              <!-- Card Header END -->

              <p class="m-2 text-dark">Ingrese su cuenta para eliminar el Grupo</p>

              <!-- Form START -->
              <form class="form-horizontal">
                <div class="card-body">

                  <!-- Input Cuenta START -->
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-4">Cuenta</label>
                    <div class="col-8">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="Cuenta">
                    </div>
                  </div>
                  <!-- Input Cuenta END -->

                  <!-- Input Contraseña START -->
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-4">Password</label>
                    <div class="col-8">
                      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                    </div>
                  </div>
                  <!-- Input Contraseña END -->

                </div>
                
                <!-- Submit START -->
                <div class="card-footer d-flex justify-content-center">
                  <button type="submit" class="btn btn-danger">Eliminar Grupo</button>
                </div>
                <!-- Submit END -->

              </form>
              <!-- Form END -->

            </div>
          </div>
          <!-- Eliminar Grupo END -->

          <!-- Modificar Enfrentamientos Grupo START -->
          <div class="col-12">
            <div class="card card-primary">
              
              <!-- Card Header START -->
              <div class="card-header">
                <h3 class="card-title">Modificar Enfrentamientos Grupo 1 - 5 Equipos</h3>
              </div>
              <!-- Card Header END -->

              <!-- Form START -->
              <form role="form">

                <!-- Card Body START -->
                <div class="row card-body">

                  <!-- Enfrentamiento 1 START -->
                  <div class="form-group col-12">
                    <label>Enfrentamiento 1</label>
                  </div>

                  <!-- Equipo A START -->
                  <div class="form-group col-6">
                    <label class="">Elegir Equipo A</label>
                    <select class="form-control">
                      <option>Fuego Rapido</option>
                      <option>Las Estrellas</option>
                      <option>Nube Negra</option>
                      <option>Sol Naciente</option>
                      <option>Frio Quemador</option>
                    </select> 
                  </div>
                  <!-- Equipo A END -->

                  <!-- Equipo B START -->
                  <div class="form-group col-6">
                    <label class="">Elegir Equipo B</label>
                    <select class="form-control">
                      <option>Fuego Rapido</option>
                      <option>Las Estrellas</option>
                      <option>Nube Negra</option>
                      <option>Sol Naciente</option>
                      <option>Frio Quemador</option>
                    </select> 
                  </div>
                  <!-- Equipo B END -->

                  <!-- Ganador Enfrentamiento START -->
                  <div class="form-group col-6">
                    <label class="">Elegir Ganador</label>
                    <select class="form-control">
                      <option>Fuego Rapido</option>
                      <option>Las Estrellas</option>
                      <option>Nube Negra</option>
                      <option>Sol Naciente</option>
                      <option>Frio Quemador</option>
                    </select> 
                  </div>
                  <!-- Equipo B END -->

                  <!-- Fecha enfrentamiento START -->
                  <div class="form-group col-6">
                    <label for="exampleInputPassword1">Fecha y hora enfrentamiento</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-clock"></i></span>
                      </div>
                      <input type="text" class="form-control float-right" id="reservationtime">
                    </div>
                  </div>
                  <!-- Fecha enfrentamiento END -->
                  <!-- Enfrentamiento 1 END -->

                  <!-- Enfrentamiento 2 START -->
                  <div class="form-group col-12">
                    <label>Enfrentamiento 2</label>
                  </div>

                  <!-- Equipo A START -->
                  <div class="form-group col-6">
                    <label class="">Elegir Equipo A</label>
                    <select class="form-control">
                      <option>Fuego Rapido</option>
                      <option>Las Estrellas</option>
                      <option>Nube Negra</option>
                      <option>Sol Naciente</option>
                      <option>Frio Quemador</option>
                    </select> 
                  </div>
                  <!-- Equipo A END -->

                  <!-- Equipo B START -->
                  <div class="form-group col-6">
                    <label class="">Elegir Equipo B</label>
                    <select class="form-control">
                      <option>Fuego Rapido</option>
                      <option>Las Estrellas</option>
                      <option>Nube Negra</option>
                      <option>Sol Naciente</option>
                      <option>Frio Quemador</option>
                    </select> 
                  </div>
                  <!-- Equipo B END -->

                  <!-- Ganador Enfrentamiento START -->
                  <div class="form-group col-6">
                    <label class="">Elegir Ganador</label>
                    <select class="form-control">
                      <option>Fuego Rapido</option>
                      <option>Las Estrellas</option>
                      <option>Nube Negra</option>
                      <option>Sol Naciente</option>
                      <option>Frio Quemador</option>
                    </select> 
                  </div>
                  <!-- Equipo B END -->

                  <!-- Fecha enfrentamiento START -->
                  <div class="form-group col-6">
                    <label for="exampleInputPassword1">Fecha y hora enfrentamiento</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-clock"></i></span>
                      </div>
                      <input type="text" class="form-control float-right" id="reservationtime">
                    </div>
                  </div>
                  <!-- Fecha enfrentamiento END -->
                  <!-- Enfrentamiento 2 END -->

                  <!-- Enfrentamiento 3 START -->
                  <div class="form-group col-12">
                    <label>Enfrentamiento 3</label>
                  </div>

                  <!-- Equipo A START -->
                  <div class="form-group col-6">
                    <label class="">Elegir Equipo A</label>
                    <select class="form-control">
                      <option>Fuego Rapido</option>
                      <option>Las Estrellas</option>
                      <option>Nube Negra</option>
                      <option>Sol Naciente</option>
                      <option>Frio Quemador</option>
                    </select> 
                  </div>
                  <!-- Equipo A END -->

                  <!-- Equipo B START -->
                  <div class="form-group col-6">
                    <label class="">Elegir Equipo B</label>
                    <select class="form-control">
                      <option>Fuego Rapido</option>
                      <option>Las Estrellas</option>
                      <option>Nube Negra</option>
                      <option>Sol Naciente</option>
                      <option>Frio Quemador</option>
                    </select> 
                  </div>
                  <!-- Equipo B END -->

                  <!-- Ganador Enfrentamiento START -->
                  <div class="form-group col-6">
                    <label class="">Elegir Ganador</label>
                    <select class="form-control">
                      <option>Fuego Rapido</option>
                      <option>Las Estrellas</option>
                      <option>Nube Negra</option>
                      <option>Sol Naciente</option>
                      <option>Frio Quemador</option>
                    </select> 
                  </div>
                  <!-- Equipo B END -->

                  <!-- Fecha enfrentamiento START -->
                  <div class="form-group col-6">
                    <label for="exampleInputPassword1">Fecha y hora enfrentamiento</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-clock"></i></span>
                      </div>
                      <input type="text" class="form-control float-right" id="reservationtime">
                    </div>
                  </div>
                  <!-- Fecha enfrentamiento END -->
                  <!-- Enfrentamiento 3 END -->

                  <!-- Enfrentamiento 4 START -->
                  <div class="form-group col-12">
                    <label>Enfrentamiento 4</label>
                  </div>

                  <!-- Equipo A START -->
                  <div class="form-group col-6">
                    <label class="">Elegir Equipo A</label>
                    <select class="form-control">
                      <option>Fuego Rapido</option>
                      <option>Las Estrellas</option>
                      <option>Nube Negra</option>
                      <option>Sol Naciente</option>
                      <option>Frio Quemador</option>
                    </select> 
                  </div>
                  <!-- Equipo A END -->

                  <!-- Equipo B START -->
                  <div class="form-group col-6">
                    <label class="">Elegir Equipo B</label>
                    <select class="form-control">
                      <option>Fuego Rapido</option>
                      <option>Las Estrellas</option>
                      <option>Nube Negra</option>
                      <option>Sol Naciente</option>
                      <option>Frio Quemador</option>
                    </select> 
                  </div>
                  <!-- Equipo B END -->

                  <!-- Ganador Enfrentamiento START -->
                  <div class="form-group col-6">
                    <label class="">Elegir Ganador</label>
                    <select class="form-control">
                      <option>Fuego Rapido</option>
                      <option>Las Estrellas</option>
                      <option>Nube Negra</option>
                      <option>Sol Naciente</option>
                      <option>Frio Quemador</option>
                    </select> 
                  </div>
                  <!-- Equipo B END -->

                  <!-- Fecha enfrentamiento START -->
                  <div class="form-group col-6">
                    <label for="exampleInputPassword1">Fecha y hora enfrentamiento</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-clock"></i></span>
                      </div>
                      <input type="text" class="form-control float-right" id="reservationtime">
                    </div>
                  </div>
                  <!-- Fecha enfrentamiento END -->
                  <!-- Enfrentamiento 4 END -->

                  <!-- Enfrentamiento 5 START -->
                  <div class="form-group col-12">
                    <label>Enfrentamiento 5</label>
                  </div>

                  <!-- Equipo A START -->
                  <div class="form-group col-6">
                    <label class="">Elegir Equipo A</label>
                    <select class="form-control">
                      <option>Fuego Rapido</option>
                      <option>Las Estrellas</option>
                      <option>Nube Negra</option>
                      <option>Sol Naciente</option>
                      <option>Frio Quemador</option>
                    </select> 
                  </div>
                  <!-- Equipo A END -->

                  <!-- Equipo B START -->
                  <div class="form-group col-6">
                    <label class="">Elegir Equipo B</label>
                    <select class="form-control">
                      <option>Fuego Rapido</option>
                      <option>Las Estrellas</option>
                      <option>Nube Negra</option>
                      <option>Sol Naciente</option>
                      <option>Frio Quemador</option>
                    </select> 
                  </div>
                  <!-- Equipo B END -->

                  <!-- Ganador Enfrentamiento START -->
                  <div class="form-group col-6">
                    <label class="">Elegir Ganador</label>
                    <select class="form-control">
                      <option>Fuego Rapido</option>
                      <option>Las Estrellas</option>
                      <option>Nube Negra</option>
                      <option>Sol Naciente</option>
                      <option>Frio Quemador</option>
                    </select> 
                  </div>
                  <!-- Equipo B END -->

                  <!-- Fecha enfrentamiento START -->
                  <div class="form-group col-6">
                    <label for="exampleInputPassword1">Fecha y hora enfrentamiento</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-clock"></i></span>
                      </div>
                      <input type="text" class="form-control float-right" id="reservationtime">
                    </div>
                  </div>
                  <!-- Fecha enfrentamiento END -->
                  <!-- Enfrentamiento 5 END -->

                  <!-- Enfrentamiento 6 START -->
                  <div class="form-group col-12">
                    <label>Enfrentamiento 6</label>
                  </div>

                  <!-- Equipo A START -->
                  <div class="form-group col-6">
                    <label class="">Elegir Equipo A</label>
                    <select class="form-control">
                      <option>Fuego Rapido</option>
                      <option>Las Estrellas</option>
                      <option>Nube Negra</option>
                      <option>Sol Naciente</option>
                      <option>Frio Quemador</option>
                    </select> 
                  </div>
                  <!-- Equipo A END -->

                  <!-- Equipo B START -->
                  <div class="form-group col-6">
                    <label class="">Elegir Equipo B</label>
                    <select class="form-control">
                      <option>Fuego Rapido</option>
                      <option>Las Estrellas</option>
                      <option>Nube Negra</option>
                      <option>Sol Naciente</option>
                      <option>Frio Quemador</option>
                    </select> 
                  </div>
                  <!-- Equipo B END -->

                  <!-- Ganador Enfrentamiento START -->
                  <div class="form-group col-6">
                    <label class="">Elegir Ganador</label>
                    <select class="form-control">
                      <option>Fuego Rapido</option>
                      <option>Las Estrellas</option>
                      <option>Nube Negra</option>
                      <option>Sol Naciente</option>
                      <option>Frio Quemador</option>
                    </select> 
                  </div>
                  <!-- Equipo B END -->

                  <!-- Fecha enfrentamiento START -->
                  <div class="form-group col-6">
                    <label for="exampleInputPassword1">Fecha y hora enfrentamiento</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-clock"></i></span>
                      </div>
                      <input type="text" class="form-control float-right" id="reservationtime">
                    </div>
                  </div>
                  <!-- Fecha enfrentamiento END -->
                  <!-- Enfrentamiento 6 END -->

                  <!-- Enfrentamiento 7 START -->
                  <div class="form-group col-12">
                    <label>Enfrentamiento 7</label>
                  </div>

                  <!-- Equipo A START -->
                  <div class="form-group col-6">
                    <label class="">Elegir Equipo A</label>
                    <select class="form-control">
                      <option>Fuego Rapido</option>
                      <option>Las Estrellas</option>
                      <option>Nube Negra</option>
                      <option>Sol Naciente</option>
                      <option>Frio Quemador</option>
                    </select> 
                  </div>
                  <!-- Equipo A END -->

                  <!-- Equipo B START -->
                  <div class="form-group col-6">
                    <label class="">Elegir Equipo B</label>
                    <select class="form-control">
                      <option>Fuego Rapido</option>
                      <option>Las Estrellas</option>
                      <option>Nube Negra</option>
                      <option>Sol Naciente</option>
                      <option>Frio Quemador</option>
                    </select> 
                  </div>
                  <!-- Equipo B END -->

                  <!-- Ganador Enfrentamiento START -->
                  <div class="form-group col-6">
                    <label class="">Elegir Ganador</label>
                    <select class="form-control">
                      <option>Fuego Rapido</option>
                      <option>Las Estrellas</option>
                      <option>Nube Negra</option>
                      <option>Sol Naciente</option>
                      <option>Frio Quemador</option>
                    </select> 
                  </div>
                  <!-- Equipo B END -->

                  <!-- Fecha enfrentamiento START -->
                  <div class="form-group col-6">
                    <label for="exampleInputPassword1">Fecha y hora enfrentamiento</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-clock"></i></span>
                      </div>
                      <input type="text" class="form-control float-right" id="reservationtime">
                    </div>
                  </div>
                  <!-- Fecha enfrentamiento END -->
                  <!-- Enfrentamiento 7 END -->

                  <!-- Enfrentamiento 8 START -->
                  <div class="form-group col-12">
                    <label>Enfrentamiento 8</label>
                  </div>

                 <!-- Equipo A START -->
                 <div class="form-group col-6">
                    <label class="">Elegir Equipo A</label>
                    <select class="form-control">
                      <option>Fuego Rapido</option>
                      <option>Las Estrellas</option>
                      <option>Nube Negra</option>
                      <option>Sol Naciente</option>
                      <option>Frio Quemador</option>
                    </select> 
                  </div>
                  <!-- Equipo A END -->

                  <!-- Equipo B START -->
                  <div class="form-group col-6">
                    <label class="">Elegir Equipo B</label>
                    <select class="form-control">
                      <option>Fuego Rapido</option>
                      <option>Las Estrellas</option>
                      <option>Nube Negra</option>
                      <option>Sol Naciente</option>
                      <option>Frio Quemador</option>
                    </select> 
                  </div>
                  <!-- Equipo B END -->

                  <!-- Ganador Enfrentamiento START -->
                  <div class="form-group col-6">
                    <label class="">Elegir Ganador</label>
                    <select class="form-control">
                      <option>Fuego Rapido</option>
                      <option>Las Estrellas</option>
                      <option>Nube Negra</option>
                      <option>Sol Naciente</option>
                      <option>Frio Quemador</option>
                    </select> 
                  </div>
                  <!-- Equipo B END -->

                  <!-- Fecha enfrentamiento START -->
                  <div class="form-group col-6">
                    <label for="exampleInputPassword1">Fecha y hora enfrentamiento</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-clock"></i></span>
                      </div>
                      <input type="text" class="form-control float-right" id="reservationtime">
                    </div>
                  </div>
                  <!-- Fecha enfrentamiento END -->
                  <!-- Enfrentamiento 8 END -->

                  <!-- Enfrentamiento 9 START -->
                  <div class="form-group col-12">
                    <label>Enfrentamiento 9</label>
                  </div>

                  <!-- Equipo A START -->
                  <div class="form-group col-6">
                    <label class="">Elegir Equipo A</label>
                    <select class="form-control">
                      <option>Fuego Rapido</option>
                      <option>Las Estrellas</option>
                      <option>Nube Negra</option>
                      <option>Sol Naciente</option>
                      <option>Frio Quemador</option>
                    </select> 
                  </div>
                  <!-- Equipo A END -->

                  <!-- Equipo B START -->
                  <div class="form-group col-6">
                    <label class="">Elegir Equipo B</label>
                    <select class="form-control">
                      <option>Fuego Rapido</option>
                      <option>Las Estrellas</option>
                      <option>Nube Negra</option>
                      <option>Sol Naciente</option>
                      <option>Frio Quemador</option>
                    </select> 
                  </div>
                  <!-- Equipo B END -->

                  <!-- Ganador Enfrentamiento START -->
                  <div class="form-group col-6">
                    <label class="">Elegir Ganador</label>
                    <select class="form-control">
                      <option>Fuego Rapido</option>
                      <option>Las Estrellas</option>
                      <option>Nube Negra</option>
                      <option>Sol Naciente</option>
                      <option>Frio Quemador</option>
                    </select> 
                  </div>
                  <!-- Equipo B END -->

                  <!-- Fecha enfrentamiento START -->
                  <div class="form-group col-6">
                    <label for="exampleInputPassword1">Fecha y hora enfrentamiento</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-clock"></i></span>
                      </div>
                      <input type="text" class="form-control float-right" id="reservationtime">
                    </div>
                  </div>
                  <!-- Fecha enfrentamiento END -->
                  <!-- Enfrentamiento 9 END -->

                  <!-- Enfrentamiento 10 START -->
                  <div class="form-group col-12">
                    <label>Enfrentamiento 10</label>
                  </div>

                  <!-- Equipo A START -->
                  <div class="form-group col-6">
                    <label class="">Elegir Equipo A</label>
                    <select class="form-control">
                      <option>Fuego Rapido</option>
                      <option>Las Estrellas</option>
                      <option>Nube Negra</option>
                      <option>Sol Naciente</option>
                      <option>Frio Quemador</option>
                    </select> 
                  </div>
                  <!-- Equipo A END -->

                  <!-- Equipo B START -->
                  <div class="form-group col-6">
                    <label class="">Elegir Equipo B</label>
                    <select class="form-control">
                      <option>Fuego Rapido</option>
                      <option>Las Estrellas</option>
                      <option>Nube Negra</option>
                      <option>Sol Naciente</option>
                      <option>Frio Quemador</option>
                    </select> 
                  </div>
                  <!-- Equipo B END -->

                  <!-- Ganador Enfrentamiento START -->
                  <div class="form-group col-6">
                    <label class="">Elegir Ganador</label>
                    <select class="form-control">
                      <option>Fuego Rapido</option>
                      <option>Las Estrellas</option>
                      <option>Nube Negra</option>
                      <option>Sol Naciente</option>
                      <option>Frio Quemador</option>
                    </select> 
                  </div>
                  <!-- Equipo B END -->

                  <!-- Fecha enfrentamiento START -->
                  <div class="form-group col-6">
                    <label for="exampleInputPassword1">Fecha y hora enfrentamiento</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-clock"></i></span>
                      </div>
                      <input type="text" class="form-control float-right" id="reservationtime">
                    </div>
                  </div>
                  <!-- Fecha enfrentamiento END -->
                  <!-- Enfrentamiento 10 END -->

                </div>
                <!-- Card Body END -->

                <!-- Submit START -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Modificar Enfrentamientos</button>
                </div>
                <!-- Submit END -->

              </form>
              <!-- Form END -->

            </div>
          </div>
          <!-- Modificar Enfrentamientos Grupo END -->
        
        </div>
        <!-- Acciones Grupo END -->

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

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
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