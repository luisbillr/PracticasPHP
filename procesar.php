<?php
$conexion = mysqli_connect("localhost","root","","dbprueba");

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$pais = $_POST['pais'];


$consulta = ("insert into dbprueba (nombre,apellido,telefono,pais)
	values ('$nombre','$apellido','$telefono','$pais')");
mysqli_query($conexion,$consulta);
echo "Datos ingresados correctamente";

?>