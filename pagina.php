<?php
session_start();
if (isset($_SESSION['s_usuario'])) {
					echo "Bienvenido, hola ".$_SESSION['s_usuario']."<br/>";
					echo '<a href="logout.php">Logout</a>';
					} 
					else {
						header ("Location: index.html");
				    }
?>