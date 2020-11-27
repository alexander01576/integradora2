<?php

require '../../conexion.php';

$caseta = $_POST['idcasetaelim'];


$sql = "delete from caseta where id_caseta = $caseta;";
if (mysqli_query($conexion, $sql)) {
    echo "borrado con exito";

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);
?>

