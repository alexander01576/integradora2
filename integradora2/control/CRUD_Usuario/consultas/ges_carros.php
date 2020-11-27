<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/boton.css">
  <link rel="stylesheet" type="text/css" href="css/estilotabla.css">
  <link rel="stylesheet" type="text/css" href="css/usuaios.css">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Tangerine">
    <title>Gestión de carros</title>
</head>

<body background="img/fondot.jpg">
    <center>
        <h1>Admistracion de carros</h1>

        <table class="egt" border="2">
            <tr>
                <td>ID carro</td>
                <td>Marca</td>
                <td>Modelo</td>
                <td>Placa</td>
                <td>Color</td>
            </tr>

            <?php
            require '../../conexion.php';
            $sqlCon = "select * from carro";
            $resul = mysqli_query($conexion, $sqlCon);
            while ($mostrar = mysqli_fetch_array($resul)) {

                $id_carro = $mostrar['id_carro'];

            ?>

                <tr>
                    <td><?php echo $mostrar['id_carro'] ?></td>
                    <td><?php echo $mostrar['marca'] ?></td>
                    <td><?php echo $mostrar['modelo'] ?></td>
                    <td><?php echo $mostrar['placa'] ?></td>
                    <td><?php echo $mostrar['color'] ?></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </center>
</body>

</html>