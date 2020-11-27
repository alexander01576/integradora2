<?php
    require '../../../conexion.php';

    $sendID = $_POST['idSend'];
    $id_tarjeta = $_POST['id_tarjetaf'];
    $saldo = $_POST['saldof'];


    $sql = "UPDATE tarjeta SET id_tarjeta=$id_tarjeta, saldo=$saldo WHERE id_tarjeta=$sendID;";
        if (mysqli_query($conexion, $sql)) {
            echo "Actualizacion con exito";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
        }
            mysqli_close($conexion);
            

?>