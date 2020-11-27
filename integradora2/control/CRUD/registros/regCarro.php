<?php
require '../../conexion.php';

$id_carro = $_POST['id_carro'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$placa = $_POST['placa'];
$color = $_POST['color'];

$sql = "insert into carro values ($id_carro, '$marca', '$modelo', '$placa', '$color');";
if (mysqli_query($conexion, $sql)) {
      echo "registro con exito";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);
?>