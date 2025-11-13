<!DOCTYPE html>
<html>
<head>
    <title>DUDAS</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="estilos_jr.css">
</head>
<body>
    <body background="fondo1.jpg">
    
    <font face="calibri" size=15 color=#FAFDFF>DUDAS CIUDADANAS💎.</font>
    <hr width="100%">
    <form method="post">
        <h1>CIUDADANOS</h1>
        <h2>- PREGUNTAR DUDAS - </h2>  
        <input type="text" name="Nombre_Completo" placeholder="Nombre Completo">
        <input type="text" name="Municipio" placeholder="Municipio">
        <input type="email" name="Correo_Electronico" placeholder="Correo_Electronico">
        <input type="text" name="Tramite" placeholder="Tramite">
        <input type="text" name="Duda_Especifica" placeholder="Duda_Especifica">
        <input type="submit" name="REGISTRAR_DUDA">

    </form>
    
    <?php
        include("registrar_vs.php");
     ?>
</body>
</html>

