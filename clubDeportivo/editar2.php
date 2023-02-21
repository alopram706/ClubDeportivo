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
		$nombre = $_GET['nombre'];
		$telefono = $_GET['telefono'];
		$fecha = $_GET['fecha_nacimiento'];
		$categoria = $_GET['categoria'];
		//echo " 'ID' $id 'ID'   $nombre   $telefono   $fecha   $categoria";
		$sql = "UPDATE clubdeportivo SET nombre = '$nombre', telefono = '$telefono', fecha_nacimiento = '$fecha', categoria = '$categoria' WHERE id = '$id'";
		//Añadimos la sentencia
		$resultado = $mysqli->query($sql);
		//0 -> error, 1-> correcto
		if ($resultado > 0) {
		?>
			<br><br>
			<p class="alert alert-primary">REGISTRO MODIFICADO</p>
			<br>
			<a href="index.php" class="btn btn-primary">Regresar</a>
		<?php
		} else {
			echo "<p>Error al modificar</p>";
			echo "<p><a href='index.php'>Regresar</a></p>";
		}
		?>
		
	</div>
</body>

</html>