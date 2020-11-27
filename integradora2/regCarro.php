<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/usuaios.css">
    <link rel="stylesheet" type="text/css" href="css/boton.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Tangerine">


    <title>Carros</title>
</head>

<center><body background="img/fondo.jpg">
<h1> CONTROL DE VIATICOS SOFTING </h1>
    
    <h2>REGISTRO DE AUTOMOVIL</h2>
    <img src="img/jeep.png" width="130" height="100" align="center">
    <form action="control/CRUD/registros/regCarro.php" method="POST" name="formDatosCarro">
        <?php
        require 'control/conexion.php';
        $sqlCon = "SELECT  id_carro+1 as id FROM carro ORDER BY id_carro DESC LIMIT 1;";
        $resul = mysqli_query($conexion, $sqlCon);
        while ($mostrar = mysqli_fetch_array($resul)) {
        ?>
            <label>Numero de carro:</label><br>
            <input type="number" name="id_carro" value="<?php echo $mostrar['id'] ?>" placeholder="id carro" required alert="rellena el id del carro" />
        <?php
        }
        ?>
        <br>
        <label>Marca:</label><br>
        <input type="text" name="marca" placeholder="marca" required alert="rellena la marca" />
        <br>
        <label>Modelo:</label><br>
        <input type="text" name="modelo" placeholder="modelo" required alert="rellena el modelo" />
        <br>
        <label>Placa:</label><br>
        <input type="text" name="placa" placeholder="placa" required alert="rellena la placa" />
        <br>
     
        <label>color:</label><br>
        <input type="text" name="color" placeholder="color" required alert="rellena el color" />
        <br><br>
        <button type="submit" class="boton_per">registrar</button>
    </form>
</body></center>

</html>