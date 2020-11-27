<?php
    require '../../../conexion.php';

    $sendID = $_POST['idSend'];
    $id_carro = $_POST['id_carrof'];
    $marca = $_POST['marcaf'];
    $modelo = $_POST['modelof'];
    $placa = $_POST['placaf'];
    $color = $_POST['colorf'];


    $sql = "UPDATE carro SET id_carro=$id_carro, marca='$marca', modelo='$modelo', placa='$placa', color='$color' WHERE id_carro=$sendID;";
        if (mysqli_query($conexion, $sql)) {
            echo "registro con exito";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
        }
            mysqli_close($conexion);
            

?>