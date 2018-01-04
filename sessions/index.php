<?php 

/*
Las sesiones son únicas por cliente, si abrimos esa aplicación en este navegador, será solamente para esa sesión en el navegador. Si se cierra el navegador, la sesión se pierde.
*/

session_start();

$_SESSION['count'] = 0;

echo "<p>Session</p>";

 ?>