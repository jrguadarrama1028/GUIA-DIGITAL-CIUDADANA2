
<?php
$conexion_gc = mysqli_connect("localhost", "root", "", "guia_ciudadana");

if (!$conexion_gc) {
	die("Error de conexion: " . mysqli_connect_error ());
}
?>