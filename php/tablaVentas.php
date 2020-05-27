<?php

  //Tablas Ventas pages Dashboard-Tiendas
  require_once("./conexionBD.php");
  $conexion = conectar();

  $consulta = "SELECT * FROM Ventas";

  if($resultado = mysqli_query($conexion, $consulta)){
    /*idProducto|nameComprador|cantProductos|Total|*/
    while($fila = mysqli_fetch_assoc($resultado)){
      echo "<tr>";
      echo "<td>
              <a href='../templates/venta-compra.php?id=".$fila['idVenta']."'>".$fila['idVenta']."</a>
            </td>";
      echo "<td>
              <a href='../templates/usuario.php?id=".$fila['idUsuario']."'>".$fila['usuario']."</a>
            </td>";
      echo "<td>".$fila['cantidadProdctos']."</td>";
      echo "<td>".$fila['precioTotal']."</td>";
      echo "</tr>";
    }
  }

  desconectarBD($conexion);
  
?>