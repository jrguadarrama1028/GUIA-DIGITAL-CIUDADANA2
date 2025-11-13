<?php
$conexionJR = mysqli_connect("localhost", "root", "", "listaasistencia");

if (!$conexionJR) {
	die("Error de conexion: " . mysqli_connect_error ());
}
?>