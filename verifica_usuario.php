<?php
include('clases/clase_login.php');
$accedeUsuario = new loginUsuario($_POST['correo'], $_POST['clave']);
$accedeUsuario->verificar_credenciales_usuario();
?>