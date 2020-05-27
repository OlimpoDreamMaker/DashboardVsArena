<?php

  //Tablas Productos pages Dashboard-Tienda
  require_once("./conexionBD.php");
  $conexion = conectar();

  $consulta = "SELECT * FROM Productos";

  if($resultado = mysqli_query($conexion, $consulta)){
    /*id|producto|precio|stock|*/
    while($fila = mysqli_fetch_assoc($resultado)){
      echo "<tr>";
      echo "<td>
              <a href='../templates/producto.php?id=".$fila['idProducto']."'>".$fila['idProducto']."</a>
            </td>";
      echo "<td>
              <a href='../templates/prodcto.php?id=".$fila['idProducto']."'>".$fila['producto']."</a>
            </td>";
      echo "<td>".$fila['precio']."</td>";
      echo "<td>".$fila['stock']."</td>";
      echo "</tr>";
    }
  }

  desconectarBD($conexion);
  
?>