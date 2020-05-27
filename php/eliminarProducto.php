<?php
  require_once("conexionBD.php");
  $conexion = conectar(); 

  $idProducto = $_GET['idProducto']; //Se recibe el ID del producto a eliminar

  $consulta = "DELETE FROM Productos WHERE idProducto='$idProducto'";

  mysqli_query($conexion, $consulta);   
  
  $desconectar = desconectarBD($conexion);
  
?>