<?php
  require_once("conexionBD.php");
  $conexion = conectar(); 

  $producto = $_POST['nombreProducto'];
  $stock = $_POST['stockProducto'];
  $precio = $_POST['precioProducto'];
  $descripcion = $_POST['descripcionProducto'];
  $foto = $_FILES["foto"]["name"];
  $type = $_FILES["foto"]["type"];
  $origen = $_FILES["foto"]["tmp_name"]; 
  $destino = "../../$carpeta/$foto";
  if($type=="image/jpeg" OR $type=="image/jpg" OR $type=="image/png" OR type=="image/gif"){
    $consulta = "INSERT INTO productos(nombreProducto,precio,stock,descripcion,imagenProducto) VALUES ('$producto', '$precio','$stock', '$descripcion', '$foto')";
  }else{
    $consulta = "INSERT INTO productos(nombreProducto,precio,stock,descripcion) VALUES ('$producto', '$precio','$stock', '$descripcion')";
  }

  mysqli_query($conexion, $consulta);   
  
  $desconectar = desconectarBD($conexion);
  
?>