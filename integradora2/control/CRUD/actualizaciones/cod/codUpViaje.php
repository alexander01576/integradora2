<?php
    require '../../../conexion.php';

    $sendID = $_POST['idSend'];
    $id_viaje = $_POST['id_viaje'];
    $fecha_viaje = $_POST['fecha_viaje'];
    $hora_viaje = $_POST['hora_viaje'];
    $calle_destino = $_POST['calle_destino'];
    $colonia_destino = $_POST['colonia_destino'];
    $estado_destino = $_POST['estado_destino'];
    $id_persona = $_POST['id_persona'];


    $sql = "UPDATE viajes SET id_viaje=$id_viaje, fecha_viaje='$fecha_viaje', hora_viaje='$hora_viaje', calle_dest='$calle_destino', colonia_dest='$colonia_destino', estado_dest='$estado_destino', id_persona=$id_persona WHERE id_viaje=$sendID;";
        if (mysqli_query($conexion, $sql)) {
            echo "Actualizacion con exito";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
        }
            mysqli_close($conexion);
            

?>