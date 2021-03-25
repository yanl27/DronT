<html>
	<head>
		<title>INTELIGENT UPTAKE</title>
		<link rel="stylesheet" href="style.css">

	</head>
	<body>
		<?php
			session_start();
			$us=$_SESSION["usuario"];
			$us=strtoupper($us);
			if($us==null)
				{
					header('location:pagina1.html');
				}
			else
				{
					echo "<h3>Bienvenido $us</h3>";
					echo "<h1>INTELIGENT UPTAKE</h1>";
					echo "<h2>DATOS TOMADOS DE LA CASA DE $us</h2>";
				}
		?>
		
		<img src="IOT.png">
		<h4></h4>
		<table style=width:100%>
			<tr>
				<th>Sensores</th>
				<th>Descripcion</a></th>
						
			</tr>
			<tr>
				<td><a href="SALA.php">Sensor Sala</a></td>
				<td>Consumo registrado en la sala</td>
			</tr>
			<tr>
				<td><a href="COCINA.php">Sensor Cocina</a></td>
				<td>Consumo registrado en la cocina</td>
			</tr>
			<tr>
				<td><a href="LAVADO.php">Sensor Lavado</a></td>
				<td>Consumo registrado en el lavado</td>
			</tr>
			<tr>
				<td><a href="DORMITORIO.php">Sensor Dormitorio</a></td>
				<td>Consumo registrado en el dormitorio</td>
			</tr>
		</table>
		
		<a href="cerrar.php">CERRAR SESION</a>
	</body>
</html>