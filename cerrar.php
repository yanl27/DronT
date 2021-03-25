<html>
	<head>

	</head>
	<body>
		<?php
			session_start();
			session_destroy();
			header("location:pagina1.html")
		?>
	</body>
</html>