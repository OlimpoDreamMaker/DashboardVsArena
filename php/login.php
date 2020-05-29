<?php

  require_once("conexionBD.php");
  $conexion = conectar(); 

  $usuario = $_POST['usuario'];
  $pass = $_POST['password'];

  $consulta = "SELECT * FROM usuarios WHERE usuario='$usuario' AND passUsu='$pass";
  if($resultado = mysqli_query($conexion, $consulta)){
    session_start();
    $user = mysqli_fetch_assoc($resultado);
    $idUser = $user['idUsuario'];
    $_SESSION['user'] = $idUser;
    //header("Location: index.php")
  }else{
    // Usuario o contraseña incorrectos header("Location: Login/")
  }


  $desconectar = desconectarBD($conexion);

?>