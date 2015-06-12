<?php

session_start();

include('conexion.php');

class loginUsuario {

private $nuevoUsuario;

private $nuevoPass;

	public function __construct($usuario, $clave){

		$this->nuevoUsuario=$usuario;

		$this->nuevoPass=md5(md5($clave).sha1($clave));

	}

	public function verificar_credenciales_usuario(){

		if (!isset($this->nuevoUsuario) && !isset($this->nuevoPass)){

				echo "Existe al menos un campo sin rellenar<br />";

				echo "<a href='index.html'>Volver al index</a>";

			}

		else{

			$consulta = ("SELECT nombres, apellidos, telefono, usuario, clave FROM usuarios WHERE usuario = '$this->nuevoUsuario' AND clave = '$this->nuevoPass'") or die (mysql_error());

			$resultado = @mysql_query($consulta);

			$fila = @mysql_fetch_array($resultado);

			$_SESSION["s_nombres"] = $fila["nombres"];

			$_SESSION["s_apellidos"] = $fila["apellidos"];

			$_SESSION["s_telefono"] = $fila["telefono"];

			$_SESSION["s_usuario"] = $fila["usuario"];

				if ($fila['clave'] == $this->nuevoPass) {

					header ("Location: editor.php");

				}

				else{

					header ("Location: login.html");

			}

			$con = ("SELECT detalle, fecnac, linkfb, linktw, linkpt, correo, fecreg from descripcion
				where id_usuario = (select id from usuarios where usuario = '".$_SESSION['s_usuario']."' and id = id_usuario) order by fecreg desc limit 1") or die (mysql_error());

			$res = @mysql_query($con);


			$file = @mysql_fetch_array($res);

			$_SESSION["detalle"] = $file["detalle"];

			$_SESSION["fecnac"] = $file["fecnac"];

			$_SESSION["linkfb"] = $file["linkfb"];

			$_SESSION["linktw"] = $file["linktw"];
			
			$_SESSION["linkpt"] = $file["linkpt"];
			
			$_SESSION["correo"] = $file["correo"];

			$_SESSION["fecreg"] = $file["fecreg"];

		}

	}

}

?>