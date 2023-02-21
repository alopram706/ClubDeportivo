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
		<div class="row">
			<h1>Socios</h1>
		</div>

		<div class="row">
			<div class="col-md-8">
				<!-- Completar atributos de form -->
				<form id="registro" name="registro" autocomplete="off" method="get" action="registrar2.php">
					<div class="form-group">
						<!-- Nombre -->
						<label for="nombre">Nombre:</label>
						<br><input class="form-control" type="text" name="nombre" maxlength="50" required placeholder="Introduce el nombre">
					</div>

					<div class="form-group">
						<!-- Teléfono -->
						<label for="telefono">Teléfono:</label>
						<br><input id="telefono" class="form-control" type="number" name="telefono" maxlength="9" required placeholder="Introduce el teléfono">
					</div>

					<div class="form-group">
						<!-- Fecha nacimiento -->
						<label for="fecha_nacimiento">Fecha de nacimiento:</label>
						<br><input class="form-control" type="date" name="fecha_nacimiento" required>
					</div>

					<div class="form-group">
						<!-- Categoría -->
						<label for="categoria">Categoría:</label>
						<br>
						<select class="custom-select" id="categoria" name="categoria">
							<option value="AMATEUR">AMATEUR</option>
							<option value="PROFESIONAL">PROFESIONAL</option>
						</select>
					</div>

					<div class="form-group">
						<!-- Registrar -->
						<input type="submit" value="Registrar" class="btn btn-primary">
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>

</html>