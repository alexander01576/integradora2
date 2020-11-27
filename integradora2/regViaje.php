<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/usuaios.css">
    <link rel="stylesheet" type="text/css" href="css/boton.css">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Tangerine">
	<title>Viajes</title>
</head>

<center><body background="img/fondo.jpg">
<h1> CONTROL DE VIATICOS SOFTING </h1>
<h2>NUEVOS VIAJES</h2>
<img src="img/viajes.png" width="90" height="90" align="center">

	<form action="control/CRUD/registros/regViaje.php" target="" method="POST" name="formDatosviaje">

		<?php
		require 'control/conexion.php';
		$sqlCon = "SELECT  id_viaje+1 as id FROM viajes ORDER BY id_viaje DESC LIMIT 1;";
		$resul = mysqli_query($conexion, $sqlCon);
		while ($mostrar = mysqli_fetch_array($resul)) {
		?>
			<label>ID viaje:</label><br>
			<input type="number" name="id_viaje" value="<?php echo $mostrar['id'] ?>" placeholder="ID viaje" required alert="rellena el id del viaje" />
		<?php
		}
		?>
		<br>
		<label>Fecha viaje:</label><br>
		<input type="date" name="fecha_viaje" required alert="Rellene el la fecha del vaje" />
		<br>
		<label>Hora viaje</label><br>
		<input type="time" name="hora_viaje" required alert="Rellena la hora del viaje" />
		<br>
		<label>calle destino</label><br>
		<input type="text" name="calle_destino" placeholder="Calle del destino" required alert="Rellena la calle del destino" />
		<br>
		<label>Colonia destino</label><br>
		<input type="text" name="colonia_destino" placeholder="Colonia destino" required alert="Rellena la colonia del destino" />
		<br>
		<label>Estado del destino</label><br>
		<input type="text" name="estado_destino" placeholder="Estado del destino" required alert="Rellena el Estado del destino" />
		<br>
		<label>Id persona quien lleva</label><br>
		<select name="id_persona">
			<option value="0">Seleccione:</option>

			<?php
			require 'control/conexion.php';
			$sqlCon = "select * from persona;";
			$resul = mysqli_query($conexion, $sqlCon);
			while ($mostrar = mysqli_fetch_array($resul)) {
				$id = $mostrar['id_persona'];
				echo '<option  value="' . $id . '">' . $mostrar['id_persona'] . ', ' . $mostrar['nombre'] . '</option>';
			}
			?>
		</select>
		<br><br>
		<button type="submit" class="boton_per">registrar</button>
	</form>
</body></center>

</html>