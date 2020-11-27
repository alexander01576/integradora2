<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/usuaios.css">
    <link rel="stylesheet" type="text/css" href="css/boton.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Tangerine">

    <title>Casetas</title>
</head>

<center><body background="img/fondo.jpg"> 
<h1> CONTROL DE VIATICOS SOFTING </h1>
    
    <h2>REGISTRO DE CASETA</h2>
    <img src="img/cas.png" width="130" height="100" align="center"><br>


    <form action="control/CRUD/registros/regCaseta.php" method="POST" name="formDatosCaseta">

        <?php
        require 'control/conexion.php';
        $sqlCon = "SELECT  id_caseta+1 as id FROM caseta ORDER BY id_caseta DESC LIMIT 1;";
        $resul = mysqli_query($conexion, $sqlCon);
        while ($mostrar = mysqli_fetch_array($resul)) {
        ?>
            <label>ID caseta:</label><br>
            <input type="number" name="id_caseta" value="<?php echo $mostrar['id'] ?>" placeholder="id caseta" required alert="rellena el id del caseta" />
        <?php
        }
        ?>
        <br>
        <label>Nombre caseta:</label><br>
        <input type="text" name="caseta" placeholder="caseta" required alert="rellena el nombre de la caseta" />
        <br>
        <label>Colonia:</label><br>
        <input type="text" name="colonia" placeholder="modelo" required alert="rellena la colonia" />
        <br>
        <label>Avenida:</label><br>
        <input type="text" name="avenida" placeholder="avenida" required alert="rellena la avenida" />
        <br>
        <label>Precio:</label><br>
        <input type="text" name="precio" placeholder="Precio" required alert="rellena el Precio" />
        <br>
        <br>
        <button type="submit" class="boton_per">registrar caseta</button>
    </form>
</body></center>

</html>