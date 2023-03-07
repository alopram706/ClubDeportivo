<!doctype html>
<html lang="es">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<title>Club Deportivo La Venta</title>
</head>

<body>
	<div class="container">
		<?php
		require 'conexion.php';
		$id = $_GET['id'];
		$sql = "DELETE FROM clubdeportivo WHERE id LIKE '$id'";
		$resultado = $mysqli->query($sql);
		if ($resultado > 0) {
			?>
				<br><br>
				<p class="alert alert-primary">REGISTRO ELIMINADO CORRECTAMENTE</p>
				<br>
				<a href="index.php" class="btn btn-primary">Regresar</a>
			<?php
		} else {
			echo "<p>Error al eliminar registro, buen intento socio</p>";
			echo "<p><a href='index.php'>Regresar al inicio</a></p>";
		}
		?>
	</div>
</body>
</html>