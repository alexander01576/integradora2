<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <h1>Admistracion de carros</h1>

        <table border="2">
            <tr>
                <td>ID carro</td>
                <td>Marca</td>
                <td>Modelo</td>
                <td>Placa</td>
                <td>Color</td>
                <td>Eliminacion</td>
                <td>Actulizacion</td>
            </tr>

        <?php 
        require '../../conexion.php';
            $sqlCon = "select * from carro";
            $resul = mysqli_query($conexion,$sqlCon);
            while ($mostrar=mysqli_fetch_array($resul)){

                $id_carro = $mostrar['id_carro'];

                ?>  

                <tr>
                    <td><?php echo $mostrar['id_carro']?></td>
                    <td><?php echo $mostrar['marca']?></td>
                    <td><?php echo $mostrar['modelo']?></td>
                    <td><?php echo $mostrar['placa']?></td>
                    <td><?php echo $mostrar['color']?></td>
                    <td>
                        <form action="../eliminaciones/elim_carro.php" method="POST">
                        <input type="hidden" name="idcarroelim" value=<?php echo $id_carro ?>>
                        <button type="submit">eliminar</button>
                        </form>
                    </td>
                    <td>
                        <form action="../actualizaciones/updt_carro.php" method="POST">
                        <input type="hidden" name="id_car" value=<?php echo $id_carro ?>>
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