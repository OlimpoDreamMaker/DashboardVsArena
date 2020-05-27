<?php
  require_once("conexionBD.php");
  $conexion = conectar(); 

  $idPremio = $_GET['idPremio']; //Se recibe el ID del premio a eliminar

  $consulta = "DELETE FROM Premios WHERE idPremio='$idPremio'";

  mysqli_query($conexion, $consulta);   
  
  $desconectar = desconectarBD($conexion);
  
?>