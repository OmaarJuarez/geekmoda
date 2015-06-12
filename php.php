<?php
$total_imagenes = count(glob("archivos_subidos/{*.jpg,*.gif,*.png}",GLOB_BRACE));
echo "total_imagenes = ".$total_imagenes;
?>