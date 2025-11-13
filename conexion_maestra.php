<?php
$conexion_maestra = mysqli_connect("localhost", "root", "", "listaasistencia");

if (!$conexion_maestra) {
	die("Error de conexion: " . mysqli_connect_error ());
	} else {
	echo "conexion exitosa";
}
?>