<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/usuaios.css">
    <link rel="stylesheet" type="text/css" href="css/boton.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Tangerine">

    <title>Usuarios</title>
</head>

<center><body  background="img/fondo.jpg">
    
    <h2>REGISTRO DE USUARIO</h2>
    <img src="img/empleados.png" width="130" height="100" align="center">
    <form action="control/CRUD/registros/regPersonas.php" method="POST" name="formDatosPersonas">

        <?php
        require 'control/conexion.php';
        $sqlCon = "SELECT  id_persona+1 as id FROM persona ORDER BY id_persona DESC LIMIT 1;";
        $resul = mysqli_query($conexion, $sqlCon);
        while ($mostrar = mysqli_fetch_array($resul)) {
        ?>
            <label>ID Persona:</label><br>
            <input type="number" name="id_persona" value="<?php echo $mostrar['id'] ?>" placeholder="ID Persona" required alert="rellena el id Persona" />
        <?php
        }
        ?>
        <br>
        <label>correo:</label><br>
        <input type="email" name="correo" placeholder="marca" required alert="rellena el correo" />
        <br>
        <label>clave:</label><br>
        <input type="password" name="clave" placeholder="contraseña" required alert="rellena el modelo" />
        <br>
        <label>Nombre:</label><br>
        <input type="text" name="nombre" placeholder="nombre" required alert="rellena el nombre" />
        <br>
        <label>Apellido paterno:</label><br>
        <input type="text" name="ap_pat" placeholder="Apellido Paterno" required alert="rellena el apellido paterno" />
        <br>
        <label>Apellido naterno:</label><br>
        <input type="text" name="ap_mat" placeholder="apellido Materno" required alert="rellena el apellido materno" />
        <br>
        <label>Edad</label><br>
        <input type="text" name="edad" placeholder="edad" required alert="rellena la edad" />
        <br>
        <label>Nivel de acceso</label><br>
        <h5>Para general 0 y para Administracion 1 </h5><br>
        <input type="number" name="privilegio" placeholder="privilegio" required alert="rellena el nivel de acceso" />
        <br>
        <label>Asignacion de tarjeta</label><br>
        <select name="id_tarjeta">
            <option value="0">Seleccione:</option>

            <?php
            require 'control/conexion.php';
            $sqlCon = "select * from tarjeta;";
            $resul = mysqli_query($conexion, $sqlCon);
            while ($mostrar = mysqli_fetch_array($resul)) {
                $id = $mostrar['id_tarjeta'];
                echo '<option value="' . $id . '">' . $mostrar['id_tarjeta'] . '</option>';
            }
            ?>
        </select>
        <br>

        <br>
        <label>Asignacion de carro</label><br>
        <select name="id_carro">
            <option value="0">Seleccione:</option>

            <?php
            require 'control/conexion.php';
            $sqlCon = "select * from carro;";
            $resul = mysqli_query($conexion, $sqlCon);
            while ($mostrar = mysqli_fetch_array($resul)) {
                echo '<option value="' . $mostrar['id_carro'] . '">' . $mostrar['modelo'] . ', ' . $mostrar['placa'] . '</option>';
            }
            ?>
        </select>
        <br>
        <br>
        <button type="submit"  class="boton_per">registrar</button>
    </form>
</body></center>

</html>