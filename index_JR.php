<!DOCTYPE html>
<html>
<head>
    <title>ASISTENCIA GRUPO 502</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="estilos_jr.css">
</head>
<body>
    <img src="logo.png" align="left" width="100" height="100">
    <img src="logo23.jpeg" align="right" width="100" height="100">
    
    <font face="calibri" size=15 color=green>
        COLEGIO DE ESTUDIOS CIENTÍFICOS Y TECNOLÓGICOS DEL ESTADO DE MÉXICO.
    </font>
    <hr width="100%">
    
    <font face="calibri" size=20 color=blue>
        LISTA DE ASISTENCIA 502
    </font>
    
    <form method="post">
        <h1>PLANTEL VALLE DE BRAVO</h1>
        <h2>REGISTRAR ESTUDIANTE</h2>
        
        <input type="text" name="N_CONTROL" placeholder="Número de control">
        <input type="text" name="N_ESTUDIANTE" placeholder="Nombre estudiante">
        <input type="text" name="AP_PATERNO" placeholder="Apellido Paterno">
        <input type="text" name="AP_MATERNO" placeholder="Apellido Materno">
        <input type="email" name="CORREO_INS" placeholder="Correo institucional">
        
        <input type="submit" name="registrar_JR">
    </form>
    
    <?php
        include("registrar_JR.php");
    ?>
</body>
</html>