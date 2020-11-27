<?php
require '../../conexion.php';

$id_tarjeta = $_POST['id_tarjeta'];
$saldo = $_POST['saldo'];

$sql = "insert into tarjeta values ($id_tarjeta, $saldo);";
if (mysqli_query($conexion, $sql)) {
      echo "registro con exito";

} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);
?>