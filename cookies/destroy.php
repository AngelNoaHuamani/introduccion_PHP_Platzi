<?php 

setcookie('name', null, time() - 1);
echo 'Destroy';

?>