<?php

  //Tablas Torneos pages Dashboard-Torneos
  require_once("./conexionBD.php");
  $conexion = conectar();

  $consulta = "SELECT * FROM Torneos T JOIN Juegos J ON T.Juegos_idJuegos=J.idJuego";

  if($resultado = mysqli_query($conexion, $consulta)){
    /*id|torneo|juego|cant participantes|estado/faseDeGrupos/modalidad/fecha start-end*/
    while($fila = mysqli_fetch_assoc($resultado)){
      echo "<tr>";
      echo "<td>
              <a href='../templates/torneo.php?id=".$fila['idTorneo']."'>".$fila['idTorneo']."</a>
            </td>";
      echo "<td>
              <a href='../templates/torneo.php?id=".$fila['idTorneo']."'>".$fila['torneo']."</a>
            </td>";
      echo "<td>
              <a href='../templates/juego.php?id=".$fila['idJuego']."'>".$fila['nombreJuego']."</a>
            </td>";
      echo "<td>".$fila['cantParticipantes']."</td>";
      echo "<td>".$fila['estado']."</td>";
      echo "<td>".$fila['fasesDeGrupo']."</td>";
      echo "<td>".$fila['modalidad']."</td>";
      echo "<td>".$fila['fechaInicio']." | ".$fila['fechaFin']."</td>";
      echo "</tr>";
    }
  }

  desconectarBD($conexion);
  
?>