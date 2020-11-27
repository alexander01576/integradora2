<?php
    require '../../../conexion.php';

    $sendID = $_POST['idSend'];
    $id_caseta = $_POST['id_casetaf'];
    $nombre = $_POST['casetaf'];
    $colonia = $_POST['coloniaf'];
    $avenida = $_POST['avenidaf'];
    $precio = $_POST['preciof'];


    $sql = "UPDATE caseta SET id_caseta=$id_caseta, nombre_caseta='$nombre', colonia='$colonia', avenida='$avenida', precio_caseta=$precio WHERE id_caseta=$sendID;";
        if (mysqli_query($conexion, $sql)) {
            echo "Actualizacion con exito";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
        }
            mysqli_close($conexion);
            

?>