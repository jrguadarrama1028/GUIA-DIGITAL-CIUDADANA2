<?php
    include ("conexion_maestra.php");

    if(isset($_POST['registrar_JR']) &&
       !empty(trim($_POST['N_CONTROL'])) &&
       !empty(trim($_POST['N_ESTUDIANTE'])) &&
       !empty(trim($_POST['AP_PATERNO'])) &&
       !empty(trim($_POST['AP_MATERNO'])) &&
       !empty(trim($_POST['CORREO_INS']))) {

        $numcontrol = mysqli_real_escape_string($conexionJR, trim($_POST['N_CONTROL']));
        $nombre = mysqli_real_escape_string($conexionJR, trim($_POST['N_ESTUDIANTE']));
        $apaterno =  mysqli_real_escape_string($conexionJR, trim($_POST['AP_PATERNO']));
        $amaterno =  mysqli_real_escape_string($conexionJR, trim($_POST['AP_MATERNO']));
        $correoelectronico = mysqli_real_escape_string($conexionJR, trim($_POST['CORREO_INS']));

        $maestra_consulta = "INSERT INTO grupomaestra(N_CONTROL,N_ESTUDIANTE, AP_PATERNO, AP_MATERNO, CORREO_INS) 
                             VALUES ('$numcontrol', '$nombre', '$apaterno', '$amaterno', '$correoelectronico')";

        $maestra_resultado = mysqli_query($conexionJR, $maestra_consulta);

        if($maestra_resultado) {
            echo "<h3 class='correctomaestra'>* ESTUDIANTE REGISTRADO *</h3>";
        } else {
            echo "<h3 class='incorrectomaestra'>* INTENTE NUEVAMENTE *</h3>";
        }
    } else {
        echo "<h3 class='incorrectomaestra'>* IMPORTANTE: DEBE COMPLEMENTAR TODOS LOS DATOS *</h3>";
    }
?>