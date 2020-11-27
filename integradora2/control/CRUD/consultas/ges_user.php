<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <h1>Admistracion de usuarios</h1>

        <table border="2">
            <tr>
                <td>ID persona</td>
                <td>Correo</td>
                <td>clave</td>
                <td>nombre</td>
                <td>apeliido paterno</td>
                <td>apellido materno</td>
                <td>edad</td>
                <td>privilegio</td>
                <td>ID tarjeta</td>
                <td>ID carro</td>
                <td>Eliminacion</td>
                <td>Actulizacion</td>
            </tr>

        <?php 
        require '../../conexion.php';
            $sqlCon = "select * from persona";
            $resul = mysqli_query($conexion,$sqlCon);
            while ($mostrar=mysqli_fetch_array($resul)){

                $id_per = $mostrar['id_persona'];
                ?>

                <tr>
                    <td><?php echo $mostrar['id_persona']?></td>
                    <td><?php echo $mostrar['correo']?></td>
                    <td><?php echo $mostrar['clave']?></td>
                    <td><?php echo $mostrar['nombre']?></td>
                    <td><?php echo $mostrar['ap_pat']?></td>
                    <td><?php echo $mostrar['ap_mat']?></td>
                    <td><?php echo $mostrar['edad']?></td>
                    <td><?php echo $mostrar['privilegio']?></td>
                    <td><?php echo $mostrar['id_tarjeta']?></td>
                    <td><?php echo $mostrar['id_carro']?></td>
                    <td>
                        <form action="../eliminaciones/elim_persona.php" method="POST">
                        <input type="hidden" name="idper" value=<?php echo $id_per ?>>
                        <button type="submit">eliminar</button>
                        </form>
                    </td>
                    <td>
                        <form action="../actualizaciones/updt_persona.php" method="POST">
                        <input type="hidden" name="id_per" value=<?php echo $id_per ?>>
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