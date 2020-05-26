<?php
  require_once("conexionBD.php");
  $conexion = conectar(); 

  $usuario = $_POST['nombreUsuario'];
  $email = $_POST['emailUsuario'];
  $pass = $_POST['passUsuario'];
  $consulta = "INSERT INTO usuarios(nombreUsuario,emailUsuario,isAdmin,passUsuario,saldoVirtual,saldoEfectivo) VALUES ('$usuario', '$email','NO', '$pass', '0', '0')";

  mysqli_query($conexion, $consulta);   
  
  $desconectar = desconectarBD($conexion);
  
?>