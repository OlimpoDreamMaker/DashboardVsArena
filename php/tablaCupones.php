<?php

  //Tablas Cupones pages Dashboard-Tienda
  require_once("./conexionBD.php");
  $conexion = conectar();

  $consulta = "SELECT * FROM Juegos";

  if($resultado = mysqli_query($conexion, $consulta)){
    /*id|cupon|estado|porcentaje|fecha Inicio-Fin|*/
    while($fila = mysqli_fetch_assoc($resultado)){
      echo "<tr>";
      echo "<td>
              <a href='../templates/cupon.php?id=".$fila['idCupon']."'>".$fila['idCupon']."</a>
            </td>";
      echo "<td>
              <a href='../templates/cupon.php?id=".$fila['idCupon']."'>".$fila['cupon']."</a>
            </td>";
      echo "<td>".$fila['estado']."</td>";
      echo "<td>".$fila['porcentaje']."</td>";
      echo "<td>".$fila['inicioCupon']." | ".$fila['finCupon']."</td>";
      echo "</tr>";
    }
  }

  desconectarBD($conexion);
  
?>