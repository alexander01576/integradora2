<?php
require '../../conexion.php';

$id_caset = $_POST['id_case'];

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
    $sqlCon = "select * from caseta where id_caseta = $id_caset;";
    $resul = mysqli_query($conexion, $sqlCon);
    while ($mostrar = mysqli_fetch_array($resul)) {
    ?>

        <form action="cod/codUpCaseta.php" method="POST" name="formDatosCaseta">
            <input type="hidden" name="idSend" value="<?php echo $id_caset ?>">
            <label>ID caseta:</label><br>
            <input type="number" name="id_casetaf" value="<?php echo $mostrar['id_caseta'] ?>" placeholder="ID Caseta" required alert="rellena el campo ID caseta" />
            <br>
            <label>Nombre caseta:</label><br>
            <input type="text" name="casetaf" value="<?php echo $mostrar['nombre_caseta'] ?>" placeholder="caseta" required alert="rellena el nombre de la caseta" />
            <br>
            <label>Colonia:</label><br>
            <input type="text" name="coloniaf" value="<?php echo $mostrar['colonia'] ?>" placeholder="modelo" required alert="rellena la colonia" />
            <br>
            <label>Avenida:</label><br>
            <input type="text" name="avenidaf" value="<?php echo $mostrar['avenida'] ?>" placeholder="avenida" required alert="rellena la avenida" />
            <br>
            <label>Precio:</label><br>
            <input type="text" name="preciof" value="<?php echo $mostrar['precio_caseta'] ?>" placeholder="Precio" required alert="rellena el Precio" />
            <br>
            <br>
            <button type="submit">Actualizar caseta</button>
        </form>
    <?php
    }
    ?>
</body>

</html>