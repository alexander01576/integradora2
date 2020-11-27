<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilotabla.css">
  <link rel="stylesheet" type="text/css" href="css/usuaios.css">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Tangerine">
    <title>Gestión viajes</title>
</head>


<body background="img/fondot.jpg">
    <center>
        <h1>Admistracion de viajes</h1>

        <table border="2">
            <tr>
                <td>ID viaje</td>
                <td>fecha viaje</td>
                <td>hora viaje</td>
                <td>calle</td>
                <td>colonia</td>
                <td>Estado</td>
                <td>ID persona</td>
            </tr>

        <?php 
        require '../../conexion.php';
            $sqlCon = "select * from viajes";
            $resul = mysqli_query($conexion,$sqlCon);
            while ($mostrar=mysqli_fetch_array($resul)){
                $id_via = $mostrar['id_viaje'];
                ?>

                <tr>
                    <td><?php echo $mostrar['id_viaje']?></td>
                    <td><?php echo $mostrar['fecha_viaje']?></td>
                    <td><?php echo $mostrar['hora_viaje']?></td>
                    <td><?php echo $mostrar['calle_dest']?></td>
                    <td><?php echo $mostrar['colonia_dest']?></td>
                    <td><?php echo $mostrar['estado_dest']?></td>
                    <td><?php echo $mostrar['id_persona']?></td>
                </tr> 
            <?php
            }
            ?>
        </table>
    </center>
</body>

</html>