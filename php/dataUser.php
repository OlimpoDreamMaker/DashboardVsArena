<?php

function dataUser($conexion, $id){
  $consulta = "SELECT * FROM usuarios WHERE idUsuario='$id'";
  $resultado = mysqli_query($conexion,$consulta);
  $data = mysqli_fetch_assoc($resultado);
  $user = array("usuario" => "$data['usuario']",
                "email"=>"$data['email']",
                "avatar"=>"$data['avatarUsuario']",
                "saldoEfectivo"=>"$data['saldoEfectivo']",
                "saldoMonVir"=>"$data['saldoMonVir']");
  return $user;
}

?>