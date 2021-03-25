<html>
	<head>
	</head>
	<body>
		<?php
			$log = $_POST["login"];
			$pas = $_POST["passw"];
			if($log =="juan" && $pas =="david")
				{
					session_start();
					$_SESSION["usuario"]=$log;
					$_SESSION["codigo"]="1";
					header('location:pagina2.php');
				}	
			else
				{
				if($log =="yan" && $pas =="luis")
				{
					session_start();
					$_SESSION["usuario"]=$log;
					$_SESSION["codigo"]="2";
					header('location:pagina2.php');
				}
				
				else
					{
					if($log =="victor" && $pas =="eduardo")
					{
						session_start();
						$_SESSION["usuario"]=$log;
						$_SESSION["codigo"]="3";
						header('location:pagina2.php');
					}
						else
							{
								if($log =="jensen" && $pas =="fabian")
								{
									session_start();
									$_SESSION["usuario"]=$log;
									$_SESSION["codigo"]="4";
									header('location:pagina2.php');
								}
								else
									header('location:pagina1.html');
							}
							
					}
				}	

		?>			
	</body>
</html>