<?php
include('clases/clase_registro_nuevo_usuario.php');
$datosUsuario = new usuarioNuevo($_POST['nombres'], $_POST['apellidos'], $_POST['telefono'], $_POST['correo'], $_POST['clave']);
$datosUsuario->guardar();
?>