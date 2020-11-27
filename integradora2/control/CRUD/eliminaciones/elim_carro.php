<?php

require '../../conexion.php';

$carro = $_POST['idcarroelim'];


$sql = "delete from carro where id_carro = $carro;";
if (mysqli_query($conexion, $sql)) {
    echo "borrado con exito";

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);
?>

