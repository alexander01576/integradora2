<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilotabla.css">
  <link rel="stylesheet" type="text/css" href="css/usuaios.css">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Tangerine">
    <title>Getión de Tarjetas</title>
</head>

<body background="img/fondot.jpg">
    <center>
        <h1>Admistracion de tarjetas</h1>

        <table border="2">
            <tr>
                <td>ID de tarjeta</td>
                <td>Saldo</td>
            </tr>

        <?php 
        require '../../conexion.php';
            $sqlCon = "select * from tarjeta";
            $resul = mysqli_query($conexion,$sqlCon);
            while ($mostrar=mysqli_fetch_array($resul)){

                $id_tarjeta = $mostrar['id_tarjeta'];
                ?>

                <tr>
                    <td><?php echo $mostrar['id_tarjeta']?></td>
                    <td><?php echo $mostrar['saldo']?></td>
                </tr> 
            <?php
            }
            ?>
        </table>
    </center>
</body>

</html>