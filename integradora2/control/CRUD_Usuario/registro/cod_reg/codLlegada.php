<?php
require '../../../conexion.php';

$id_llegada = $_POST['id_llegada'];
$fecha= $_POST['fecha_viaje'];
$hora = $_POST['hora_viaje'];
$id_viaje = $_POST['id_viaje'];

$sql = "insert into llegada values ($id_llegada, '$fecha', '$hora', '$id_viaje');";
if (mysqli_query($conexion, $sql)) {
      echo "registro con exito";

} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);
?>