<?php
  require_once("conexionBD.php");
  $conexion = conectar(); 

  $idCupon = $_GET['idCupon']; //Se recibe el ID del cupon a eliminar

  $consulta = "DELETE FROM Cupones WHERE idCupon='$idCupon'";

  mysqli_query($conexion, $consulta);   
  
  $desconectar = desconectarBD($conexion);
  
?>