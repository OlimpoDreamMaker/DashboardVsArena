<?php
  require_once("conexionBD.php");
  $conexion = conectar(); 

  $idJuego = $_GET['idJuego']; //Se recibe el ID del juego a eliminar

  $consulta = "DELETE FROM Juegos WHERE idJuego='$idJuego'";

  mysqli_query($conexion, $consulta);   
  
  $desconectar = desconectarBD($conexion);
  
?>