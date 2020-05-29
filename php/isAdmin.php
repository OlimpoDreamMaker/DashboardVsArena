<?php

  function isAdmin($conexion,$id){
    $consulta = "SELECT * FROM usuarios WHERE idUsuario='$id'";
    $resultado = mysqli_query($conexion, $consulta);
    $user = mysqli_fetch_assoc($resultado);
    if($user['isAdmin'] ==  1){
      return true;
    }else{
      return false;
    }
  }

?>