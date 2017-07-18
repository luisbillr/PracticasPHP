<!DOCTYPE html>
<html>
<head>
	<title>Suma</title>
</head>
<body>
	<form action="procesar.php" method="POST">
		Ingrese el nombre:
		<input type="text" name="nombre"><br> 
		Ingrese el Apellido:
		<input type="text" name="apellido"><br>
		Ingrese el Telefono:
		<input type="text" name="telefono"><br>
		Seleccione un país
		<select name="pais">
			<option value="DR">Republica Dominicana</option>
			<option value="CR"> Costa Rica </option>
			<option value="PR"> Puerto Rico</option>
		</select>
		<input type="submit" value="Guardar">
	</form>

</body>
</html>