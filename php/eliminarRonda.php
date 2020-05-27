<?php
  require_once("conexionBD.php");
  $conexion = conectar(); 

  $idRonda = $_GET['idRonda']; //Se recibe el ID de la ronda a eliminar

  $consulta = "DELETE FROM Rondas WHERE idRonda='$idRonda'";

  mysqli_query($conexion, $consulta);   
  
  $desconectar = desconectarBD($conexion);
  
?>