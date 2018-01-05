<?php 

$value = $_COOKIE['name'];
$value++;

setcookie('name', $value);

echo 'Adding 1';

?>