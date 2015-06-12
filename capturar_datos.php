<?php

if (isset($_POST['btn_salvar'])){

	include('clases/clase_nuevos_datos.php');

	//$datosCompra = new datoNuevo($_POST['datos'], $_POST['talla'], $_POST['color'], $_POST['telefono1'], $_POST['telefono2'], $_POST['svg'], $_POST['total']);

	$datosCompra = new datoNuevo($_POST['datos'], $_POST['color'], $_POST['svg'], $_POST['titulo']);

	$datosCompra->salvar();

}else{

	if ($_SESSION['seguro'] == date('B')){

	include('clases/clase_nuevos_datos.php');

	$datosCompra = new datoNuevo($_POST['datos'], $_POST['color'], $_POST['svg'], $_POST['titulo']);

	$datosCompra->salvar();

	}else{

		header ("Location: editor.php");

	}

}



?>