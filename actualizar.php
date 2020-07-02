<?php
require_once('cors.php');
require_once('conexion.php');

$data = json_decode(file_get_contents("php://input"), true);
 $id = $data['id']; 
 $nombre = $data['nombre'];
 $telefono = $data['telefono'];

 $modelo = new Conexion();
 $db = $modelo->getConexion();

$sql ="UPDATE alumno SET nombre='$nombre', telefono='$telefono' WHERE id=$id";

 $query = $db->prepare($sql);
 $query->execute();

  $string = '{"msg": "registro actualizado"}';
  echo $string; 
  ?>