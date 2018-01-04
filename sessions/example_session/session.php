<?php

$users = ['caleb'=> '123', 'susan'=> '567'];

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

foreach( $users as $key =>$us){
    
    if($usuario == $key && $contrasena == $us){
        session_start();
        $_SESSION['usuario'] = $usuario;
        header('Location: result.php');
    }
}

if(!isset($_SESSION['usuario'])){
    header('Location: index.php');
}

?>

