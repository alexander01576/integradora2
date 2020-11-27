<?php
require '../../conexion.php';

$id_viaje = $_POST['id_viaje'];
$fecha_viaje = $_POST['fecha_viaje'];
$hora_viaje = $_POST['hora_viaje'];
$calle_destino = $_POST['calle_destino'];
$colonia_destino = $_POST['colonia_destino'];
$estado_destino = $_POST['estado_destino'];
$id_persona = $_POST['id_persona'];

$sql = "insert into viajes values ($id_viaje, '$fecha_viaje', '$hora_viaje', '$calle_destino', '$colonia_destino', '$estado_destino', $id_persona);";
if (mysqli_query($conexion, $sql)) {
      echo "registro con exito";

} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);
?>