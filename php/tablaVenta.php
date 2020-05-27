<?php

  //Tablas Venta pages Dashboard-Tienda-Venta
  require_once("./conexionBD.php");
  $conexion = conectar();
  $idVenta = $_GET['idVenta'];

  $consulta = "SELECT * FROM DetallesVentas DV 
               WHERE DV.Ventas_idVenta='$idVenta' 
               JOIN Productos P
               ON DV.Productos_idProducto=P.idProducto";
  if($resultado = mysqli_query($conexion, $consulta)){
    /*idProducto|nameComprador|cantProductos|Total|*/
    while($fila = mysqli_fetch_assoc($resultado)){
      echo "<tr>";
      echo "<td>
              <a href='../templates/producto.php?id=".$fila['idProducto']."'>".$fila['idProducto']."</a>
            </td>";
      echo "<td>
              <a href='../templates/producto.php?id=".$fila['idProducto']."'>".$fila['producto']."</a>
            </td>";
      echo "<td>".$fila['precio']."</td>";
      echo "<td>".$fila['cantidadProducto']."</td>";
      echo "<td>".$fila['cantidadProducto']*$fila['precio']."</td>";
      echo "</tr>";
    }
  }

  desconectarBD($conexion);
  
?>