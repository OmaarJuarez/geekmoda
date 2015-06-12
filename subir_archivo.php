<?php
session_start();
if (isset($_SESSION['s_usuario'])) {
    mkdir("archivos_subidos/".$_SESSION['s_usuario'], 0777);


    if (isset($_FILES['archivo'])) {
        $archivo = $_FILES['archivo'];
        $extension = pathinfo($archivo['name'], PATHINFO_EXTENSION);
        $time = time();
        $nombre = "{$_POST['nombre_archivo']}_$time.$extension";
        $total_imagenes = count(glob("archivos_subidos/".$_SESSION['s_usuario']."/{*.jpg,*.gif,*.png}",GLOB_BRACE));




    if ($extension == 'jpg' or $extension == 'gif' or $extension == 'png' or $extension == 'JPG' or $extension == 'GIF' or $extension == 'PNG') {
     
        if ($total_imagenes < 5) {
            if (move_uploaded_file($archivo['tmp_name'], "archivos_subidos/".$_SESSION['s_usuario']."/$nombre")) {
               echo 1;
            } else {
               echo 0;
            }
        } else{
            echo 2;
        }

        }else{
            echo 0;
        }
    }
}


?>
