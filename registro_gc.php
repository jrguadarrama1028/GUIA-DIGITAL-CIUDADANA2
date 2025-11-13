<?php
    include ("conexion_gc.php");

    if(isset($_POST['visitantes']) &&
       !empty(trim($_POST['Nombre'])) &&
       !empty(trim($_POST['AP_PATERNO'])) &&
       !empty(trim($_POST['AP_MATERNO'])) &&
       !empty(trim($_POST['Localidad_Comunidad']))&&
       !empty(trim($_POST['Municipio']))) { 
        $nombre = trim($_POST['Nombre']);
        $apaterno = trim($_POST['AP_PATERNO']);
        $amaterno = trim($_POST['AP_MATERNO']);
        $Localidad_Comunidad = trim($_POST['Localidad_Comunidad']);
        $Municipio = trim($_POST['Municipio']);

        $maestra_consulta = "INSERT INTO visitantes(Nombre,AP_PATERNO, AP_MATERNO,Localidad_Comunidad, Municipio) 
                             VALUES ( '$nombre', '$apaterno', '$amaterno', '$Localidad_Comunidad','$Municipio')";

        $maestra_resultado = mysqli_query($conexion_gc, $maestra_consulta);

        if($maestra_resultado) {
            echo "<h3 class='correctomaestra'>* CIUDADANO REGISTRADO *</h3>";
        } else {
            echo "<h3 class='incorrectomaestra'>* INTENTE NUEVAMENTE *</h3>";
        }
    } else {
        echo "<h3 class='incorrectomaestra'>* IMPORTANTE: DEBE COMPLEMENTAR TODOS LOS DATOS *</h3>";
    }
?>
