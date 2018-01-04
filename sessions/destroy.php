<?php 

/*
Para eliminar datos de una sesión tenemos dos opciones:

*unset, le pasamos el valor que queremos borrar, nunca se debe hacer unset del arreglo completo de sesión ($_SESSION), porque entonces ya no podremos utilizarla.
*session_destroy, elimina completamente la sesión y la cierra en ese momento.
*/

session_start();

//unset($_SESSION['count']);

session_destroy();

 ?>
