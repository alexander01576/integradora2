<?php
require '../../conexion.php';

$id_tarjet = $_POST['id_tarje'];

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
    $sqlCon = "select * from tarjeta where id_tarjeta = $id_tarjet;";
    $resul = mysqli_query($conexion, $sqlCon);
    while ($mostrar = mysqli_fetch_array($resul)) {
    ?>

        <form action="cod/codUpTarjet.php" target="" method="POST" name="formDatosTarjetas">
            <input type="hidden" name="idSend" value="<?php echo $id_tarjet ?>">
            <label>Número de tarjeta rfid:</label><br>
            <input type="number" name="id_tarjetaf" value="<?php echo $mostrar['id_tarjeta'] ?>" placeholder="tarjeta" required alert="rellena el id" />
            <br>
            <label>Saldo:</label><br>
            <input type="text" name="saldof" value="<?php echo $mostrar['saldo'] ?>" placeholder="saldo" required alert="rellena el saldo" />
            <br>
            <button type="submit">actualizar</button>
        </form>
    <?php
    }
    ?>
</body>

</html>