
<?php
    include ("conexion_gc.php");

    if(isset($_POST['REGISTRAR_DUDA']) &&
       !empty(trim($_POST['Nombre_Completo'])) &&
       !empty(trim($_POST['Municipio'])) &&
       !empty(trim($_POST['Correo_Electronico'])) &&
       !empty(trim($_POST['Tramite'])) &&
       !empty(trim($_POST['Duda_Especifica']))) {

        $Nombre_Completo = mysqli_real_escape_string($conexion_gc, trim($_POST['Nombre_Completo']));
        $Municipio= mysqli_real_escape_string($conexion_gc, trim($_POST['Municipio']));
        $Correo_Electronico =  mysqli_real_escape_string($conexion_gc, trim($_POST['Correo_Electronico']));
        $Tramite =  mysqli_real_escape_string($conexion_gc, trim($_POST['Tramite']));
        $Duda_Especifica = mysqli_real_escape_string($conexion_gc, trim($_POST['Duda_Especifica']));

        $maestra_consulta = "INSERT INTO dudas_ciudadanas(Nombre_Completo,Municipio, Correo_Electronico, Tramite, Duda_Especifica) 
                             VALUES ('$Nombre_Completo', '$Municipio', '$Correo_Electronico', '$Tramite', '$Duda_Especifica')";

        $maestra_resultado = mysqli_query($conexion_gc, $maestra_consulta);

        if($maestra_resultado) {
            echo "<h3 class='correctomaestra'>*  REGISTRANDO DUDA *</h3>";
        } else {
            echo "<h3 class='incorrectomaestra'>* INTENTE NUEVAMENTE *</h3>";
        }
    } else {
        echo "<h3 class='incorrectomaestra'>* IMPORTANTE: DEBE COMPLEMENTAR TODOS LOS DATOS *</h3>";
    }
?>  