<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/usuaios.css">
    <link rel="stylesheet" type="text/css" href="css/boton.css">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Tangerine">
    <title>Registro Llegada</title>
</head>

<center><body <body background="img/fondo.jpg" >
<h2>REGISTRO DE LLEGADA</h2>
<img src="img/viajes.png" width="90" height="90" align="center">
    <form action="cod_reg/codLlegada.php" target="" method="POST" name="formDatosTarjetas">
        <?php
        require '../../conexion.php';
        $sqlCon = "SELECT  id_llegada+1 as id FROM llegada ORDER BY id_llegada DESC LIMIT 1;";
        $resul = mysqli_query($conexion, $sqlCon);
        while ($mostrar = mysqli_fetch_array($resul)) {
        ?>
            <label>ID llegada</label><br>
            <input type="number" name="id_llegada" value="<?php echo $mostrar['id'] ?>" placeholder="id llegada" required alert="rellena el id" />
        <?php
        }
        ?>
        <br>
        <label>Fecha llegada viaje:</label><br>
		<input type="date" name="fecha_viaje" required alert="Rellene el la fecha del vaje" />
		<br>
		<label>Hora llegada viaje</label><br>
        <input type="time" name="hora_viaje" required alert="Rellena la hora del viaje" />
        <br>
        <label>id viaje realizado</label><br>
        <select name="id_viaje">
			<option value="0">Seleccione:</option>

			<?php
			require '../../conexion.php';
			$sqlCon = "select * from viajes;";
			$resul = mysqli_query($conexion, $sqlCon);
			while ($mostrar = mysqli_fetch_array($resul)) {
				$id = $mostrar['id_viaje'];
				echo '<option  value="' . $id . '">' . $mostrar['id_viaje'] . ', ' . $mostrar['colonia_dest'] . '</option>';
			}
			?>
		</select>
		<br>
        <br>
        <button type="submit" class="boton_per">registrar</button>
    </form>
</body></center>

</html>