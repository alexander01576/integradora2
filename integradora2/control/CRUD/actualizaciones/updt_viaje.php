<?php
require '../../conexion.php';

$id_via = $_POST['id_via'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $sqlCon = "select * from viajes where id_viaje = $id_via;";
    $resul = mysqli_query($conexion, $sqlCon);
    while ($mostrar = mysqli_fetch_array($resul)) {
    ?>

        <form action="cod/codUpViaje.php" target="" method="POST" name="formDatosviaje">
            <input type="hidden" name="idSend" value="<?php echo $id_via ?>">
            <label>ID viaje:</label><br>
            <input type="number" name="id_viaje" value="<?php echo $mostrar['id_viaje'] ?>" placeholder="ID viaje" required alert="rellena el id del viaje" />
            <br>
            <label>Fecha viaje:</label><br>
            <input type="date" name="fecha_viaje" value="<?php echo $mostrar['fecha_viaje'] ?>" required alert="Rellene el la fecha del vaje" />
            <br>
            <label>Hora viaje</label><br>
            <input type="time" name="hora_viaje" value="<?php echo $mostrar['hora_viaje'] ?>" required alert="Rellena la hora del viaje" />
            <br>
            <label>calle destino</label><br>
            <input type="text" name="calle_destino" value="<?php echo $mostrar['calle_dest'] ?>" placeholder="Calle del destino" required alert="Rellena la calle del destino" />
            <br>
            <label>Colonia destino</label><br>
            <input type="text" name="colonia_destino" value="<?php echo $mostrar['colonia_dest'] ?>" placeholder="Colonia destino" required alert="Rellena la colonia del destino" />
            <br>
            <label>Estado del destino</label><br>
            <input type="text" name="estado_destino" value="<?php echo $mostrar['estado_dest'] ?>" placeholder="Estado del destino" required alert="Rellena el Estado del destino" />
            <br>
            <label>Id persona quien lleva</label><br>
            <select name="id_persona">
            <option value="0">Seleccione:</option>

            <?php
            require '../../conexion.php';
            $sqlCon = "select * from persona;";
            $resul = mysqli_query($conexion, $sqlCon);
            while ($mostrar = mysqli_fetch_array($resul)) {
				$id =$mostrar['id_persona'];
                echo '<option  value="'.$id.'">'.$mostrar['id_persona'].', '.$mostrar['nombre'].'</option>';
            }
            ?>
        </select><br>
            <button type="submit">registrar</button>
        </form>
    <?php
    }
    ?>
</body>

</html>