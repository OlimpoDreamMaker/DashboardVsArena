<?php
  require_once("conexionBD.php");
  $conexion = conectar(); 

  $idGrupo = $_GET['idGrupo']; //Se recibe el ID del grupo a eliminar

  $consulta = "DELETE FROM Grupos WHERE idGrupo='$idGrupo'";

  mysqli_query($conexion, $consulta);   
  
  $desconectar = desconectarBD($conexion);
  
?>