<?php

require '../../conexion.php';

$id_per = $_POST['idper'];


$sql = "delete from persona where id_persona = $id_per;";
if (mysqli_query($conexion, $sql)) {
    echo "borrado con exito";

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);
?>

