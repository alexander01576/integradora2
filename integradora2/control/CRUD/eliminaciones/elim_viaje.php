<?php

require '../../conexion.php';

$via = $_POST['id_via'];


$sql = "delete from viajes where id_viaje = $via;";
if (mysqli_query($conexion, $sql)) {
    echo "borrado con exito";

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);
?>