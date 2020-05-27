<?php

  //Tablas Equipos pages Dashboard-Usuarios
  require_once("./conexionBD.php");
  $conexion = conectar();

  $consulta = "SELECT * FROM Torneos T JOIN Juegos J ON T.Juegos_idJuegos=J.idJuego";

  if($resultado = mysqli_query($conexion, $consulta)){
    /*id|equipo|cantDeIntegrantes|enviar Email|*/
    while($fila = mysqli_fetch_assoc($resultado)){
      echo "<tr>";
      echo "<td>
              <a href='../templates/equipo.php?id=".$fila['idEquipo']."'>".$fila['idEquipo']."</a>
            </td>";
      echo "<td>
              <a href='../templates/equipo.php?id=".$fila['idEquipo']."'>".$fila['equipo']."</a>
            </td>";
      $subConsulta = "SELECT * FROM Equipos_Usuarios WHERE Equipo_idEquipo=".$fila['idEquipo'];
      $subResultado = mysqli_query($conexion, $subConsulta);
      $cantIntegrantes = mysql_num_rows($subConsulta);
      echo "<td>".$cantIntegrantes."</td>";//Hacer una consulta para ver la cantidad de usuarios que tiene un equipo, Unir con la tabla de Equipos_Usuarios
      echo "<td>
              <a href='./sendEmail.php?id=".$fila['idEquipo']."'><span class='badge bg-primary' title='Enviar Email'><i class='fas fa-envelope'></i></span></a>
            </td>";
      echo "</tr>";
    }
  }

  desconectarBD($conexion);
  
?>