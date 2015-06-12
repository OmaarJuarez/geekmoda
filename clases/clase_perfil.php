<?php

session_start();

include('conexion.php');

class PerfilUsuario {

private $nuevoDetalle;
private $nuevoFecnac;
private $nuevoLinkfb;
private $nuevoLinktw;
private $nuevoLinkpt;
private $nuevoCorreo;

	public function __construct($detalle, $fecnac, $linkfb, $linktw, $linkpt, $correo){

		$this->nuevoDetalle=$detalle;

		$this->nuevoFecnac=$fecnac;

		$this->nuevoLinkfb=$linkfb;

		$this->nuevoLinktw=$linktw;

		$this->nuevoLinkpt=$linkpt;

		$this->nuevoCorreo=$correo;

	}

	public function verificar_descripcion_perfil(){

		$consulta = ("SELECT detalle, fecnac, linkfb, linktw, linkpt, correo, fecreg from descripcion
where id_usuario = (select id from usuarios where usuario = '".$_SESSION['s_usuario']."' and id = id_usuario) order by fecreg desc limit 1") or die (mysql_error());

		$resultado = @mysql_query($consulta);

		if (mysql_num_rows($resultado)>0){

			if (isset($_POST['btn_actualizar'])){
				$actualizar = "UPDATE descripcion SET 
				detalle='$this->nuevoDetalle', 
				fecnac='$this->nuevoFecnac', 
				linkfb='$this->nuevoLinkfb', 
				linktw='$this->nuevoLinktw', 
				linkpt='$this->nuevoLinkpt', 
				correo='$this->nuevoCorreo', 
				fecreg=sysdate() 
				where id_usuario = (select id from usuarios 
				where usuario = '".$_SESSION['s_usuario']."' and id = id_usuario)"; 

				$resultado = @mysql_query($actualizar);

				$con = ("SELECT detalle, fecnac, linkfb, linktw, linkpt, correo, fecreg from descripcion
				where id_usuario = (select id from usuarios where usuario = '".$_SESSION['s_usuario']."' and id = id_usuario) order by fecreg desc limit 1") or die (mysql_error());

				$res = @mysql_query($con);


				$file = @mysql_fetch_array($res);

				$_SESSION["detalle"] = $file["detalle"];

				//echo $_SESSION["detalle"];

				$_SESSION["fecnac"] = $file["fecnac"];

				//echo $_SESSION["fecnac"];

				$_SESSION["linkfb"] = $file["linkfb"];

				//echo $_SESSION["linkfb"];
				
				$_SESSION["linktw"] = $file["linktw"];

				//echo $_SESSION["linktw"];
				
				$_SESSION["linkpt"] = $file["linkpt"];

				//echo $_SESSION["linkpt"];
				
				$_SESSION["correo"] = $file["correo"];

				//echo $_SESSION["correo"];
				
				$_SESSION["fecreg"] = $file["fecreg"];

				//echo $_SESSION["fecreg"];
				
				header ("Location: perfil.php");

			}else{
				echo "Error";
			}

		} else {

			if (isset($_POST['btn_actualizar'])){
				$registrar = "INSERT INTO descripcion (id_usuario, detalle, fecnac, linkfb, linktw, linkpt, correo, fecreg)
					select 
					id, 
					'$this->nuevoDetalle' as detalle,  
					'$this->nuevoFecnac' as fecnac, 
					'$this->nuevoLinkfb' as linkfb, 
					'$this->nuevoLinktw' as linktw,
					'$this->nuevoLinkpt' as linkpt,
					'$this->nuevoCorreo' as correo,
					sysdate() as fecreg
					from usuarios where usuario = '".$_SESSION["s_usuario"]."'"; 

				$resultado = @mysql_query($registrar);

				$con = ("SELECT detalle, fecnac, linkfb, linktw, linkpt, correo, fecreg from descripcion
				where id_usuario = (select id from usuarios where usuario = '".$_SESSION['s_usuario']."' and id = id_usuario) order by fecreg desc limit 1") or die (mysql_error());

				$res = @mysql_query($con);


				$file = @mysql_fetch_array($res);

				$_SESSION["detalle"] = $file["detalle"];

				//echo $_SESSION["detalle"];

				$_SESSION["fecnac"] = $file["fecnac"];

				//echo $_SESSION["fecnac"];

				$_SESSION["linkfb"] = $file["linkfb"];

				//echo $_SESSION["linkfb"];
				
				$_SESSION["linktw"] = $file["linktw"];

				//echo $_SESSION["linktw"];
				
				$_SESSION["linkpt"] = $file["linkpt"];

				//echo $_SESSION["linkpt"];
				
				$_SESSION["correo"] = $file["correo"];

				//echo $_SESSION["correo"];
				
				$_SESSION["fecreg"] = $file["fecreg"];

				//echo $_SESSION["fecreg"];
				
				header ("Location: perfil.php");

			}else{
				echo "Error";
			}

		}

	}

}

?>