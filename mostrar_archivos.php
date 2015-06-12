<?php
session_start();
$directorio_escaneado = scandir('archivos_subidos/'.$_SESSION['s_usuario']);
$archivos = array();
foreach ($directorio_escaneado as $item) {
    if ($item != '.' and $item != '..') {
        $archivos[] = $_SESSION['s_usuario'].'/'.$item;
    }
}
echo json_encode($archivos);
?>
