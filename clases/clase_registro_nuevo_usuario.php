<?php
session_start();
$_SESSION['seguro'] = date('B');
include('conexion.php');
class usuarioNuevo {
private $nuevoNombre;
private $nuevoApellido;
private $nuevoTelefono;
private $nuevoUsuario;
private $nuevoPass;
	public function __construct($nombres, $apellidos, $telefono, $usuario, $clave){
		$this->nuevoNombre=$nombres;
		$this->nuevoApellido=$apellidos;
		$this->nuevoTelefono=$telefono;
		$this->nuevoUsuario=$usuario;
		$this->nuevoPass=md5(md5($clave).sha1($clave));
	}
	public function guardar(){
		if (isset($_POST['btn_enviar'])){
			if (!isset($this->nuevoNombre) && !isset($this->nuevoApellido) && !isset($this->nuevoTelefono) && !isset($this->nuevoUsuario) && !isset($this->nuevoPass)){
				echo "Existe al menos un campo sin rellenar<br />";
				echo "<a href='index.html'>Volver al index</a>";
			}
			$nuevo_nombre = mysql_query("SELECT usuario from usuarios where usuario='$this->nuevoUsuario'");
			if (@mysql_num_rows($nuevo_nombre)>0) {
			echo "Ese correo ya existe<br />";
			echo "<a href='index.html'>Volver al index</a>";
			}
			else {
			$registrar = "INSERT INTO usuarios (nombres,apellidos,telefono,usuario,clave) VALUES ('$this->nuevoNombre','$this->nuevoApellido','$this->nuevoTelefono','$this->nuevoUsuario','$this->nuevoPass')"; 
			$resultado = @mysql_query($registrar);
			header ("Location: login.html");
			}
		}
		else {
			echo "Error";
		}
	}
}
?>