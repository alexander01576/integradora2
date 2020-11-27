<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <h1>Admistracion de tarjetas</h1>

        <table border="2">
            <tr>
                <td>ID de tarjeta</td>
                <td>Saldo</td>
                <td>Eliminacion</td>
                <td>Actulizacion</td>
            </tr>

        <?php 
        require '../../conexion.php';
            $sqlCon = "select * from tarjeta";
            $resul = mysqli_query($conexion,$sqlCon);
            while ($mostrar=mysqli_fetch_array($resul)){

                $id_tarjeta = $mostrar['id_tarjeta'];
                ?>

                <tr>
                    <td><?php echo $mostrar['id_tarjeta']?></td>
                    <td><?php echo $mostrar['saldo']?></td>
                    <td>
                        <form action="../eliminaciones/elim_tarjeta.php" method="POST">
                        <input type="hidden" name="idtarjetaElim" value=<?php echo $id_tarjeta ?>>
                        <button type="submit">eliminar</button>
                        </form>
                    </td>
                    <td>
                        <form action="../actualizaciones/updt_tarjeta.php" method="POST">
                        <input type="hidden" name="id_tarje" value=<?php echo $id_tarjeta ?>>
                        <button type="submit">actulizar</button>
                        </form>
                    </td>
                </tr> 
            <?php
            }
            ?>
        </table>
    </center>
</body>

</html>