<?php

require 'conexion.php';

session_start();

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

$q = "select count(*) as c1 from persona where correo = '$usuario' and clave = '$clave';";
$consulta = mysqli_query($conexion, $q);

$array = mysqli_fetch_array($consulta);

if($array['c1']>0){
    $q2 = "select privilegio as c2 from persona where correo = '$usuario' and clave = '$clave';";
    $consulta2 = mysqli_query($conexion, $q2);
    $array2 = mysqli_fetch_array($consulta2);
    if($array2['c2']>0){
        header("location: ../admin.php");
    }else{
        header("location: ../user.php");
    }
} else {
    header("location: ../index.html");
}
?>