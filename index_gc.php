<!DOCTYPE html>
<html>
<head>
    <title>GUIA CIUDADANA </title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="estilos_jr.css">
</head>
<body>
    <body background="fondo1.jpg">
    
    <font face="" size=15 color=#FAFDFF>GUIA CIUDADANA💎.</font>
    <hr width="100%">
    <form method="post">
        <h1>VISITANTES</h1>
        <h2>- REGISTRAR CIUDADANO - </h2>  
        <input type="text" name="Nombre" placeholder="Nombre">
        <input type="text" name="AP_PATERNO" placeholder="Apellido Paterno">
        <input type="text" name="AP_MATERNO" placeholder="Apellido Materno">
        <input type="text" name="Localidad_Comunidad" placeholder="Localidad/Comunidad">
        <input type="text" name="Municipio" placeholder="Municipio">
        <input type="submit" name="visitantes">

    </form>
    
    <?php
        include("registro_gc.php");
     ?>
</body>
</html>

