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

		$nombre = $_GET['nombre'];
		$telefono = $_GET['telefono'];
		$fecha_nacimiento = $_GET['fecha_nacimiento'];
		$categoria = $_GET['categoria'];
		//echo "$nombre $telefono $fecha_nacimiento $categoria";

		$sql = "INSERT INTO clubdeportivo (nombre, telefono, fecha_nacimiento, categoria) VALUES ('$nombre', '$telefono', '$fecha_nacimiento', '$categoria')";
		//Añadimos la sentencia

		$resultado = $mysqli->query($sql);

		//0 -> error, 1-> correcto
		if ($resultado > 0) {
			// echo "<p>Registro OK</p>";
			// echo "<p><a href='index.html'>Regresar</a></p>";

		?>
			<br><br>

			<p class="alert alert-primary">REGISTRO AGREGADO</p>

			<br>
			<a href="index.php" class="btn btn-primary">Regresar</a>
		<?php
		} else {
			echo "<p>Error al insertar</p>";
			echo "<p><a href='registrar.php'>Regresar</a></p>";
		}
		?>
	</div>
</body>

</html>