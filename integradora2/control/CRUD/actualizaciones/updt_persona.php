<?php
require '../../conexion.php';

$id_per = $_POST['id_per'];

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
    $sqlCon = "select * from persona where id_persona = $id_per;";
    $resul = mysqli_query($conexion, $sqlCon);
    while ($mostrar = mysqli_fetch_array($resul)) {
    ?>

        <form action="cod/codUpPer.php" method="POST" name="formDatosPersonas">
            <input type="hidden" name="idSend" value="<?php echo $id_per ?>">
            <label>ID Persona:</label><br>
            <input type="number" name="id_persona" value="<?php echo $mostrar['id_persona'] ?>" placeholder="ID Persona" required alert="rellena el id Persona" />
            <br>
            <label>correo:</label><br>
            <input type="email" name="correo" value="<?php echo $mostrar['correo'] ?>" placeholder="marca" required alert="rellena el correo" />
            <br>
            <label>clave:</label><br>
            <input type="password" name="clave" value="<?php echo $mostrar['clave'] ?>" placeholder="contraseña" required alert="rellena el modelo" />
            <br>
            <label>Nombre:</label><br>
            <input type="text" name="nombre" value="<?php echo $mostrar['nombre'] ?>" placeholder="nombre" required alert="rellena el nombre" />
            <br>
            <label>Apellido paterno:</label><br>
            <input type="text" name="ap_pat" value="<?php echo $mostrar['ap_pat'] ?>" placeholder="Apellido Paterno" required alert="rellena el apellido paterno" />
            <br>
            <label>Apellido naterno:</label><br>
            <input type="text" name="ap_mat" value="<?php echo $mostrar['ap_mat'] ?>" placeholder="apellido Materno" required alert="rellena el apellido materno" />
            <br>
            <label>Edad</label><br>
            <input type="text" name="edad" value="<?php echo $mostrar['edad'] ?>" placeholder="edad" required alert="rellena la edad" />
            <br>
            <label>Nivel de acceso</label><br>
            <h5>Para general 0 y para Administracion 1 </h5><br>
            <input type="number" name="privilegio" value="<?php echo $mostrar['privilegio'] ?>" placeholder="privilegio" required alert="rellena el nivel de acceso" />
            <br>
            <label>Asignacion de tarjeta</label><br>
            <select name="id_tarjeta">
                <option value="0">Seleccione:</option>

                <?php
                require '../../conexion.php';
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
                require '../../conexion.php';
                $sqlCon = "select * from carro;";
                $resul = mysqli_query($conexion, $sqlCon);
                while ($mostrar = mysqli_fetch_array($resul)) {
                    echo '<option value="' . $mostrar['id_carro'] . '">' . $mostrar['modelo'] . ', ' . $mostrar['placa'] . '</option>';
                }
                ?>
            </select>
            <br>
            <br>
            <br>
            <button type="submit">actualizar</button>
        </form>

    <?php
    }
    ?>
</body>

</html>