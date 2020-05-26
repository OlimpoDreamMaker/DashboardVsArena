<?php
  require_once("conexionBD.php");
  $conexion = conectar(); 

  $juego = $_POST['nombreJuego'];
  $descripcion = $_POST['descripcionJuego'];
  $plataforma = $_POST['plataforma'];
  $foto = $_FILES["foto"]["name"];
  $type = $_FILES["foto"]["type"];
  $origen = $_FILES["foto"]["tmp_name"]; 
  $destino = "../../$carpeta/$foto";
  if($type=="image/jpeg" OR $type=="image/jpg" OR $type=="image/png" OR type=="image/gif"){
    $consulta = "INSERT INTO juegos(nombreJuego,descripcionJuego,plataforma, portadaJuego) VALUES ('$juego', '$descripcion', '$plataforma', '$foto')";
  }else{
    $consulta = "INSERT INTO juegos(nombreJuego,descripcionJuego,plataforma) VALUES ('$juego', '$descripcion', '$plataforma')";
  }

  mysqli_query($conexion, $consulta);   
  
  $desconectar = desconectarBD($conexion);
  
?>