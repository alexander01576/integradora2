<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/usuaios.css">
    <link rel="stylesheet" type="text/css" href="css/boton.css">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Tangerine">
	<title>Tarjetas</title>
</head>

<center><body background="img/fondo.jpg">

<h1> CONTROL DE VIATICOS SOFTING </h1>
    
    <h2>NUEVAS TARJETAS</h2>
	<img src="img/tarjetas.png" width="150" height="110" align="center">
	<form action="control/CRUD/registros/regTarjetas.php" target="" method="POST" name="formDatosTarjetas">
		<?php
		require 'control/conexion.php';
		$sqlCon = "SELECT  id_tarjeta+1 as id FROM tarjeta ORDER BY id_tarjeta DESC LIMIT 1;";
		$resul = mysqli_query($conexion, $sqlCon);
		while ($mostrar = mysqli_fetch_array($resul)) {
		?>
			<label>Número de tarjeta rfid:</label><br>
			<input type="number" name="id_tarjeta" value="<?php echo $mostrar['id'] ?>" placeholder="tarjeta" required alert="rellena el id" />
		<?php
		}
		?>
		<br>
		<label>Saldo:</label><br>
		<input type="text" name="saldo" placeholder="saldo" required alert="rellena el saldo" />
		<br>
		<button type="submit" class="boton_per">registrar</button>
	</form>
</body></center>

</html>