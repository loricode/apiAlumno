<?php
include('cors.php');
include('conexion.php');

$data = json_decode(file_get_contents("php://input"), true);
$id = $data['id'];

if(!empty($id)){
	$modelo = new Conexion();
    $db = $modelo->getConexion();
	$sql = "DELETE FROM alumno WHERE id='$id'";
    $query = $db->prepare($sql);
    $query->execute();
    
    $string = '{"msg": "eliminado con exito"}';
    echo $string; 
}

?>