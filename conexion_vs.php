<?php
$conexion_vs = mysqli_connect("localhost", "root", "", "dudas");

if (!$conexion_vs) {
	die("Error de conexion: " . mysqli_connect_error ());
	} else {
	echo "conexion exitosa";
}
?>