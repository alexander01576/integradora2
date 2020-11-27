<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <h1>Admistracion de casetas</h1>

        <table border="2">
            <tr>
                <td>ID caseta</td>
                <td>Nombre</td>
                <td>Colonia</td>
                <td>avenida</td>
                <td>Precio</td>
                <td>Eliminacion</td>
                <td>Actulizacion</td>
            </tr>

        <?php 
        require '../../conexion.php';
            $sqlCon = "select * from caseta";
            $resul = mysqli_query($conexion,$sqlCon);
            while ($mostrar=mysqli_fetch_array($resul)){

                $id_caseta = $mostrar['id_caseta'];
                ?>

                <tr>
                    <td><?php echo $mostrar['id_caseta']?></td>
                    <td><?php echo $mostrar['nombre_caseta']?></td>
                    <td><?php echo $mostrar['colonia']?></td>
                    <td><?php echo $mostrar['avenida']?></td>
                    <td><?php echo $mostrar['precio_caseta']?></td>
                    <td>
                        <form action="../eliminaciones/elim_caseta.php" method="POST">
                        <input type="hidden" name="idcasetaelim" value=<?php echo $id_caseta ?>>
                        <button type="submit">eliminar</button>
                        </form>
                    </td>
                    <td>
                        <form action="../actualizaciones/updt_caseta.php" method="POST">
                        <input type="hidden" name="id_case" value=<?php echo $id_caseta ?>>
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