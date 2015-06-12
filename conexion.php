<?php
$db_host="localhost";
$db_usuario="root";
$db_password="";
$db_nombre="infousu";
$conexion = @mysql_connect($db_host, $db_usuario, $db_password) or die(mysql_error());
mysql_set_charset('utf8',$conexion);
$db = @mysql_select_db($db_nombre, $conexion) or die(mysql_error());
?>