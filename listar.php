<?php 
include('cors.php');
include('conexion.php');
 $array=array();
 $modelo = new Conexion();
 $db = $modelo->getConexion();
 $sql = 'SELECT id, nombre, telefono FROM alumno ORDER BY nombre';
 $query = $db->prepare($sql);
 $query->execute();
   
  while($fila = $query->fetch()) {
    $array[] = array(
      "id" => $fila['id'],
      "nombre" => $fila['nombre'],
      "telefono" => $fila['telefono'],
     ); }//fin del ciclo while 

  $json = json_encode($array);

  echo $json;
?>