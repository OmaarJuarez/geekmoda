<?php  
	include('conexion.php');

    $con = ("SELECT count(id) from prenda
    where id_usuario = (select id from usuarios where usuario = '".$_SESSION['s_usuario']."' and id = id_usuario)") or die (mysql_error());

    $res = @mysql_query($con);


    $file = mysql_fetch_array($res);
    
    echo $file["0"];
?>