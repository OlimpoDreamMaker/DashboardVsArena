<?php
  require_once("conexionBD.php");
  $conexion = conectar(); 

  $idTorneo = $_GET['idTorneo']; //Se recibe el ID del torneo a eliminar

  $consulta = "DELETE FROM Torneos WHERE idTorneo='$idTorneo'";

  mysqli_query($conexion, $consulta);   
  
  $desconectar = desconectarBD($conexion);
  
?>