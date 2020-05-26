<?php
  require_once("conexionBD.php");
  $conexion = conectar(); 

  $cupon = $_POST['nombreCupon'];
  $porcentajeDescuento = $_POST['porcentajeDescuento'];
  $estadoCupon = $_POST['estadoCupon']; //Dos estado posibles,activo, caducado
  $inicioCupon = $_POST['fechaInicio'];
  $finCupon = $_POST['fechaFin'];
  $consulta = "INSERT INTO Cupones(nombreCupon,porcentajeDescuento,estadoCupon,inicioCupon,finCupon) VALUES ('$cupon','$porcentajeDescuento','$estadoCupon', '$inicioCupon', '$finCupon')";
  
  mysqli_query($conexion, $consulta);   
  
  $desconectar = desconectarBD($conexion);
  
?>