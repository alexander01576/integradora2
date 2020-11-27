<?php
require '../../conexion.php';

$id_carro = $_POST['id_car'];

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
    $sqlCon = "select * from carro where id_carro = $id_carro;";
    $resul = mysqli_query($conexion,$sqlCon);
    while ($mostrar=mysqli_fetch_array($resul)){
                ?>

    <form action="cod/codUPCar.php" method="POST" name="formDatosCarro">
        <input type="hidden" name="idSend" value="<?php echo $id_carro ?>">
		<label>Numero de carro:</label><br>
		<input type="number" name="id_carrof" value="<?php echo $mostrar['id_carro'] ?>" placeholder="id carro" required alert="rellena el id del carro"/>
        <br>
		<label>Marca:</label><br>
		<input type="text" name="marcaf" value="<?php echo $mostrar['marca'] ?>" placeholder="marca" required alert="rellena la marca"/>
        <br>
        <label>Modelo:</label><br>
        <input type="text" name="modelof" value="<?php echo $mostrar['modelo'] ?>" placeholder="modelo" required alert="rellena el modelo"/>
        <br>
        <label>Placa:</label><br>
        <input type="text" name="placaf"  value="<?php echo $mostrar['placa'] ?>" placeholder="placa" required alert="rellena la placa"/>
        <br>
        <br>
        <label>color:</label><br>
        <input type="text" name="colorf" value="<?php echo $mostrar['color'] ?>" placeholder="color" required alert="rellena el color"/>
        <br>
		<button type="submit">Actualizar</button>
	</form>
            <?php
            }
            ?>
</body>
</html>

