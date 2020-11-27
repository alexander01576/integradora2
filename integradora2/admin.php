<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

   
    <link type="text/css" rel="stylesheet" href="css/menu2.css" />
     
    <title>Menu Administrador</title>
</head>
<center> <body background="img/fondo.jpg">

    <p>admin</p>
  <div id="menu">
  <nav>
		<ul>
			<li id="item"><a href="#">TARJETAS</a>
            <ul id="desple">
					<li><a href="regTarjetas.php">Registro</a></li>
					<li><a href="control/CRUD/consultas/ges_tarjetas.php">Gestión</a></li>
				</ul>
			</li>            
			<li id="item"><a href="#">CARROS</a>
				<ul id="desple">
					<li><a href="regCarro.php">Registro</a></li>
					<li><a href="control/CRUD/consultas/ges_carros.php">Gestión</a></li>
				</ul>
			</li>
			<li id="item"><a href="#">CASETAS</a>
            <ul id="desple">
					<li><a href="regCaseta.php">Registro</a></li>
					<li><a href="control/CRUD/consultas/ges_casetas.php">Gestión</a></li>
				</ul>
			</li>
            <li id="item"><a href="#">PERSONAL</a>
            <ul id="desple">
					<li><a href="regPersonas.php">Registro</a></li>
					<li><a href="control/CRUD/consultas/ges_user.php">Gestión</a></li>
				</ul>
			</li>
            <li id="item"><a href="#">VIAJES</a>
            <ul id="desple">
					<li><a href="regViaje.php">Registro</a></li>
					<li><a href="control/CRUD/consultas/ges_viajes.php">Gestión</a></li>
				</ul>
			</li>
</ul></nav>
</div><br>
<br>
<br>
<br>
<br>
<br>
<center>
<img src="img/logo.png" align="center" width="250" height="250">
</center>
<br>  
<br>      
<br>  
<p class="black-text">Estamos aquí para gestionar los movimientos en el control
                                de viáticos de los trabajadores, así como automatizar el proceso de identificación y localización de vehículos que son otorgados a los empleados.
                            </p>


<br>
  <br>  
<br>
    <?php 
        echo "<a href='control/salir.php'>salir</a>";
    ?>
</body></center>
</html>