<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilotabla.css">
  <link rel="stylesheet" type="text/css" href="css/usuaios.css">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Tangerine">
    <title>Getión de casetas</title>
</head>

<body background="img/fondot.jpg">
    <center>
        <h1>Admistracion de casetas</h1>

        <table border="2">
            <tr>
                <td>ID caseta</td>
                <td>Nombre</td>
                <td>Colonia</td>
                <td>avenida</td>
                <td>Precio</td>
            </tr>

        <?php 
        require '../../conexion.php';
            $sqlCon = "select * from caseta";
            $resul = mysqli_query($conexion,$sqlCon);
            while ($mostrar=mysqli_fetch_array($resul)){

                $id_caseta = $mostrar['id_caseta'];
                ?>

                <tr>
                    <td><?php echo $mostrar['id_caseta']?></td>
                    <td><?php echo $mostrar['nombre_caseta']?></td>
                    <td><?php echo $mostrar['colonia']?></td>
                    <td><?php echo $mostrar['avenida']?></td>
                    <td><?php echo $mostrar['precio_caseta']?></td>
                </tr> 
            <?php
            }
            ?>
        </table>
    </center>
</body>

</html>