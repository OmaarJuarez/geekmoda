<?php
session_start();
if ($_SESSION['seguro'] == date('B')){
echo <<<HTML
<!DOCTYPE html>
<html>
<head>
<title>Usuarios</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="js/script.js" ></script>
	<script language="JavaScript" type="text/javascript">
		alert("Registro Exitoso");
	</script>
</head>
<body>
    <div class="container">
      <header>
        <h2>Ingresa!</h2>
        <p>El diseño que deseas en solo minutos</p>
      </header>
  <!-- / START Form -->
    <form class='form' action="verifica_usuario.php" method="post">
      <div class='field'>
        <label for='email'>E-mail:</label>
        <input id='email' name='correo' type='email'>
        <br><br>
        <label for='password'>Clave:</label>
        <input id='password' name='clave' type='password'>
      </div><br><br>
      <button name="btn_enviar">Ingresar</button>
      <div class='checkbox2'>
        <label for='checkbox2'>
          ¿Aún no tienes una cuenta?
          <a href='index.html'>Registrarse</a>
        </label>
      </div>
    </form>
  </div>
</body>
</html>
HTML;
}
else{
header ("Location: index.html");
}
?>