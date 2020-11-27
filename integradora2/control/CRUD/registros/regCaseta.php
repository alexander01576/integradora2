<?php
require '../../conexion.php';

$id_caseta = $_POST['id_caseta'];
$nombre_caseta = $_POST['caseta'];
$colonia = $_POST['colonia'];
$avenida = $_POST['avenida'];
$precio = $_POST['precio'];

$sql = "insert into caseta values ($id_caseta, '$nombre_caseta', '$colonia', '$avenida', $precio);";
if (mysqli_query($conexion, $sql)) {
      echo "registro con exito";

} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);
?>