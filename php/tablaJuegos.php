<?php

  //Tablas Juegos pages Dashboard-Juegos
  require_once("./conexionBD.php");
  $conexion = conectar();

  $consulta = "SELECT * FROM Juegos";

  if($resultado = mysqli_query($conexion, $consulta)){
    /*id|juego|plataforma|*/
    while($fila = mysqli_fetch_assoc($resultado)){
      echo "<tr>";
      echo "<td>
              <a href='../templates/juego.php?id=".$fila['idJuego']."'>".$fila['idTorneo']."</a>
            </td>";
      echo "<td>
              <a href='../templates/juego.php?id=".$fila['idJuego']."'>".$fila['torneo']."</a>
            </td>";
      echo "<td>".$fila['plataforma']."</td>";
      echo "</tr>";
    }
  }

  desconectarBD($conexion);
  
?>