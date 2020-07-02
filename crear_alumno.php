<?php
require_once("cors.php");
require_once("conexion.php");

$data = json_decode(file_get_contents("php://input"),true);

 $nombre = $data['nombre'];
 $telefono = $data['telefono'];

   $modelo = new conexion();
   $conexion = $modelo->getConexion();
   $sql = "INSERT INTO alumno(nombre, telefono) VALUES(:nombre,:telefono)";

      $consulta = $conexion->prepare($sql);
      $consulta->bindParam(':nombre', $nombre);
      $consulta->bindParam(':telefono', $telefono);
      $consulta->execute();
      
  $string = '{"msg": "registro exitoso"}';
   echo $string; 
    
?>