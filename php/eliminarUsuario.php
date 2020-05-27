<?php
  require_once("conexionBD.php");
  $conexion = conectar(); 

  $idUsuario = $_GET['idUsuario']; //Se recibe el ID del usuario a eliminar

  $consulta = "DELETE FROM Usuarios WHERE idUsuario='$idUsuario'";

  mysqli_query($conexion, $consulta);   
  
  $desconectar = desconectarBD($conexion);
  
?>