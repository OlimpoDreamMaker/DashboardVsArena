<?php
  require_once("conexionBD.php");
  $conexion = conectar(); 

  $torneo = $_POST['nombreTorneo'];
  $cantParticipantes = $_POST['cantParticipantes'];
  $modalidad = $_POST['modalidad'];
  $estado = $_POST['estado']; //Cuatro estado posibles, a espera de fecha, activo, concluido, cancelado
  $fechaInicio = $_POST['fechaInicio'];
  $fechaFin = $_POST['fechaFin'];
  $fasesDeGrupo = $_POST['fasesDeGrupo'];
  $juego = $_POST['juego'];
  $subConsulta = "SELECT * FROM Juegos WHERE nombreJuego='$juego'";
  if($resultado = mysqli_query($conexion, $consulta)){
    $fila = mysqli_fetch_assoc($resultado);
    $idJuego = $fila['idJuego'];
    $consulta = "INSERT INTO Torneos(nombreTorneo,cantParticipantes,modalidad,estado,fechaInicio,fechaFin,fasesDeGrupo,Juegos_idJuegos) VALUES ('$torneo','$cantParticipantes', '$modalidad', '$estado', '$fechaInicio', '$fechaFin', '$fasesDeGrupo', '$idJuego')";
    
    mysqli_query($conexion, $consulta);   
     
  }
  
  $desconectar = desconectarBD($conexion);
  
?>