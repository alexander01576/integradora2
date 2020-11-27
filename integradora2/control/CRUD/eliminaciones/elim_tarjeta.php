<?php

require '../../conexion.php';

$tarjeta = $_POST['idtarjetaElim'];


$sql = "delete from tarjeta where id_tarjeta = $tarjeta;";
if (mysqli_query($conexion, $sql)) {
    echo "borrado con exito";

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);
?>

