<?php
require '../../conexion.php';

$id_persona = $_POST['id_persona'];
$correo = $_POST['correo'];
$clave = $_POST['clave'];
$nombre = $_POST['nombre'];
$ap_pat = $_POST['ap_pat'];
$ap_mat = $_POST['ap_mat'];
$edad = $_POST['edad'];
$privilegio = $_POST['privilegio'];
$id_tarjeta = $_POST['id_tarjeta'];
$id_carro = $_POST['id_carro'];

$sql = "insert into persona values ($id_persona, '$correo', '$clave', '$nombre', '$ap_pat', '$ap_mat', $edad, $privilegio, $id_tarjeta, $id_carro);";
if (mysqli_query($conexion, $sql)) {
      echo "registro con exito";

} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);
?>