<?php
require '../../../conexion.php';

$sendID = $_POST['idSend'];
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

$sql = "UPDATE persona SET id_persona=$id_persona, correo='$correo', clave='$clave', nombre='$nombre', ap_pat='$ap_pat', ap_mat='$ap_mat', edad=$edad, privilegio=$privilegio, id_tarjeta=$id_tarjeta, id_carro=$id_carro WHERE id_persona=$sendID;";
if (mysqli_query($conexion, $sql)) {
      echo "actualizacion con exito";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);
?>