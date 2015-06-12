<?php

	session_start();

	$_SESSION['seguro'] = date('B');

	include('conexion.php');

	class datoNuevo {

	private $nuevoDatos;

	//private $nuevoTalla;

	private $nuevoColor;

	/*private $nuevoTelefono1;

	private $nuevoTelefono2;*/

	private $nuevoSvg;

	private $nuevoTitulo;

	//private $nuevoTotal;

		//public function __construct($datos, $talla, $color, $telefono1, $telefono2, $svg, $total){

		public function __construct($datos, $color, $svg, $titulo){

			$this->nuevoDatos=$datos;

			//$this->nuevoTalla=$talla;

			$this->nuevoColor=$color;

			/*$this->nuevoTelefono1=$telefono1;

			$this->nuevoTelefono2=$telefono2;*/

			$this->nuevoSvg=$svg;

			$this->nuevoTitulo=$titulo;

			//$this->nuevoTotal=$total;

		}

		public function salvar(){

			include('conexion.php');

			if (isset($_POST['btn_salvar'])){

				/*if (!isset($this->nuevoTalla) && !isset($this->nuevoTelefono1)){

					echo "Existe al menos un campo sin rellenar<br />";

					echo "<a href='index.html'>Volver al index</a>";

				}*/

				$nuevo_dato = mysql_query("SELECT svg from prenda where svg='$this->nuevoSvg'");

				if (@mysql_num_rows($nuevo_dato)>0) {

				}

				else {

				//$registrar = "INSERT INTO pedido (id_usuario,talla,color,telefono1,telefono2,svg,precio,reg_pedido) VALUES ((select id from usuarios where  concat(nombres, ' ', apellidos) = '$this->nuevoDatos'),'$this->nuevoTalla','$this->nuevoColor','$this->nuevoTelefono1','$this->nuevoTelefono2','".$this->nuevoSvg."','$this->nuevoTotal',sysdate())"; 

				$registrar = "INSERT INTO prenda (id_usuario,color,svg, nombre, reg_pedido) VALUES ((select id from usuarios where  concat(nombres, ' ', apellidos) = '$this->nuevoDatos'),'$this->nuevoColor','".$this->nuevoSvg."','$this->nuevoTitulo',sysdate())"; 

				$resultado = @mysql_query($registrar);

				$leerjson = mysql_query("SELECT svg from prenda where (select id from usuarios where  concat(nombres, ' ', apellidos) = '$this->nuevoDatos') order by reg_pedido desc limit 1");

				$row = mysql_fetch_row($leerjson);

				$decode = $row[0];

				var_dump(json_decode($decode, true));

				}

			}

			else {

				echo "Error";

			}

		}

	}

?>



