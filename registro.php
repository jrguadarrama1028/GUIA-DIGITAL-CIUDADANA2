<?php
    include ("conexion_maestra.php");

    if(isset($_POST['listaestudiantes']) &&
       !empty(trim($_POST['N_CONTROL'])) &&
       !empty(trim($_POST['N_ESTUDIANTE'])) &&
       !empty(trim($_POST['AP_PATERNO'])) &&
       !empty(trim($_POST['AP_MATERNO'])) &&
       !empty(trim($_POST['CORREO_INS']))) {

        $numcontrol = trim($_POST['N_CONTROL']);
        $nombre = trim($_POST['N_ESTUDIANTE']);
        $apaterno = trim($_POST['AP_PATERNO']);
        $amaterno = trim($_POST['AP_MATERNO']);
        $correoelectronico = trim($_POST['CORREO_INS']);

        $maestra_consulta = "INSERT INTO grupomaestra(N_CONTROL,N_ESTUDIANTE, AP_PATERNO, AP_MATERNO, CORREO_INS) 
                             VALUES ('$numcontrol', '$nombre', '$apaterno', '$amaterno', '$correoelectronico')";

        $maestra_resultado = mysqli_query($conexion_maestra, $maestra_consulta);

        if($maestra_resultado) {
            echo "<h3 class='correctomaestra'>* ESTUDIANTE REGISTRADO *</h3>";
        } else {
            echo "<h3 class='incorrectomaestra'>* INTENTE NUEVAMENTE *</h3>";
        }
    } else {
        echo "<h3 class='incorrectomaestra'>* IMPORTANTE: DEBE COMPLEMENTAR TODOS LOS DATOS *</h3>";
    }
?>
