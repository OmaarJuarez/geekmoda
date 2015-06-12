<?php
session_start();
$_SESSION = array();

foreach (glob("archivos_subidos/abc@gmail.com/*.jpg") as $filename) {
   echo "$filename size " . filesize($filename) . "\n";
   unlink($filename);
}


header("Location: login.html");
session_destroy();
?>