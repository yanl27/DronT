<html>
	<head>
		<title>INTELIGENT UPTAKE</title>
		<link rel="stylesheet" href="style.css">

	</head>
	<body>
		<?php
			session_start();
			$us=$_SESSION["usuario"];
			$C=$_SESSION["codigo"];
			$us=strtoupper($us);
			if($us==null)
				{
					header('location:pagina1.html');
				}
			else
				{
					echo "<h3>DATOS DE LA SALA</h3>";
				}
		?>
		<h1>INTELIGENT UPTAKE</h1>
		
		<table style=width:100%>

			
		<?php
			echo "<h2>DATOS TOMADOS DE LA CASA DE $us</h2>";
			echo "<tr><td>Velocidad</td><td>Distancia</td><td>Fecha y hora</td></tr>";
			if($C=="1"){
				$servurl="ec2-18-206-155-50.compute-1.amazonaws.com:3000/datosm/1";
			}
			if($C=="2"){
				$servurl="ec2-18-206-155-50.compute-1.amazonaws.com:3000/datosm/2";
			}
			if($C=="3"){
				$servurl="ec2-18-206-155-50.compute-1.amazonaws.com:3000/datosm/3";
			}
			if($C=="4"){
				$servurl="ec2-18-206-155-50.compute-1.amazonaws.com:3000/datosm/4";
			}

			$curl=curl_init($servurl);

			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			$response=curl_exec($curl);

			if($response===false)
				{
					curl_close($curl);
					die("Error en la conexion");
				}
			curl_close($curl);
			$resp=json_decode($response);
			$longitud=count($resp);

			for($i=0; $i<$longitud; $i++)
				{
					$dec=$resp[$i];
					$lugar=$dec->iddispositivo;

				if($lugar=="Sensor Sala")
				{
					$cons=$dec->consumo;
					$cons=$cons*120;
					$fech=$dec->fecha;
					

					
					echo "<tr><td>Consumo : $cons W</td><td>$fech</td></tr>";
				}
				}
			
		?>

			
		</table>
		<a href="pagina2.php">VOLVER</a>
	</body>
</html>