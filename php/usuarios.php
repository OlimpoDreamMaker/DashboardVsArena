<?php

  //Tablas Usuarios pages Dashboard-Usuarios
  require_once("./conexionBD.php");
  $conexion = conectar();

  $consulta = "SELECT * FROM usuarios";

  if($resultado = mysqli_query($conexion, $consulta)){
    //id|usuario|email|efectivo|advertencia/banear/
    while($fila = mysqli_fetch_assoc($resultado)){
      echo "<tr>";
      echo "<td>
              <a href='../templates/usuario.php?id=".$fila['idUsuario']."'>".$fila['idUsuario']."</a>
            </td>";
      echo "<td>
              <a href='../templates/usuario.php?id=".$fila['idUsuario']."'>".$fila['usuario']."</a>
            </td>";
      echo "<td>".$fila['email']."</td>";
      echo "<td>".$fila['efectivo']."</td>";
      echo "<td>".$fila['monedaVirtual']."</td>";
      echo "<td>
              <a href='./sendWarning.php?id=".$fila['idUsuario']."'><span class='badge bg-warning' title='Advertir posible Ban'><i class='fas fa-exclamation-triangle'></i></span></a>
            </td>";
      echo "<td>
              <a href='./bannearUsuario.php?id=".$fila['idUsuario']."'><span class='badge bg-danger' title='Banear'><i class='fas fa-skull-crossbones'></i></span></a>
            </td>";
      echo "</tr>";
    }
  }


  desconectarBD($conexion);
?>