<?php
require 'conexion.php';
?>
<!doctype html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/jquery.dataTables.min.css">

	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>

	<title>Club Deportivo La Venta</title>

	<script>
		$(document).ready(function() {
			$(tabla).DataTable();
		});
	</script>
</head>

<body>
	<?php
	$sql = "SELECT * FROM clubdeportivo";
	$resultado = $mysqli->query($sql);
	?>
	<div class="container">
		<div class="row">
			<h1>Socios del club deportivo</h1>
		</div>
		<br>
		<div class="row">
			<a href="registrar.php" class="btn btn-primary">Registrar</a>

		</div>
		<br>
		<br>
		<br>
		<table id="tabla" class="display" style="width:100%">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Telefono</th>
					<th>Fecha de nacimiento</th>
					<th>Categoria</th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php
				while ($fila = $resultado->fetch_assoc()) {
					echo "<tr>";
					echo "<td>", $fila['nombre'], "</td>";
					echo "<td>", $fila['telefono'], "</td>";
					echo "<td>", $fila['fecha_nacimiento'], "</td>";
					echo "<td>", $fila['categoria'], "</td>";
					echo "<td><a href='editar.php?id=$fila[id]' class='btn btn-warning'>Editar</a></td>";
					echo "<td><a href='eliminar.php?id=$fila[id]' class='btn btn-danger'>Eliminar</a></td>";
					echo "</tr>";
				}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>

<!-- Se podría mejorar el código pero funciona, mejor no tocar nada -->