<?php

include('clases/clase_perfil.php');

$datosPerfil = new PerfilUsuario($_POST['acerca'], $_POST['fecnac'], $_POST['linkfb'], $_POST['linktw'], $_POST['linkpt'], $_POST['correo']);

$datosPerfil->verificar_descripcion_perfil();

?>