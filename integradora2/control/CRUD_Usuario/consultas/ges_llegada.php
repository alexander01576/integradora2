<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilotabla.css">
  <link rel="stylesheet" type="text/css" href="css/usuaios.css">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Tangerine">
    <title>Consulta de llegada</title>
</head>
<body background="img/fondot.jpg">
<center>
        <h1>Consulta de llegadas</h1>

        <table border="2">
            <tr>
                <td>ID llegada del viaje</td>
                <td>fecha llegada</td>
                <td>Hora llegada</td>
                <td>id viaje que se realizo</td>
            </tr>

        <?php 
        require '../../conexion.php';
            $sqlCon = "select * from llegada";
            $resul = mysqli_query($conexion,$sqlCon);
            while ($mostrar=mysqli_fetch_array($resul)){
                ?>

                <tr>
                    <td><?php echo $mostrar['id_llegada']?></td>
                    <td><?php echo $mostrar['fecha_llegada']?></td>
                    <td><?php echo $mostrar['hora_llegada']?></td>
                    <td><?php echo $mostrar['id_viaje']?></td>
                </tr> 
            <?php
            }
            ?>
        </table>
    </center>
</body>
</html>