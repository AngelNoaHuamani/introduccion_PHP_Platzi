
<?php

require_once 'config.php';

$result = false;

  if(!empty($_POST)){
      //variables del formulario
      $name = $_POST['name'];
      $email = $_POST['email'];
      $password = md5($_POST['password']);

      //consulta SQL
      $sql = "INSERT INTO usuarios(name, email,password) VALUES (:name, :email, :password)";
      $query = $pdo->prepare($sql);
      $result = $query->execute([
                    'name' => $name,
                    'email' => $email,
                    'password' => $password
                ]);
  }

 ?>


<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>Base de Datos</title>

      <!--Framework Boostrap (css)-->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
            crossorigin="anonymous">

  </head>

  <body>
      <div class="container">
        <h1>Agregando Usuarios</h1>
        <a href="index.php">Home</a>

        <?php
              if ($result == true){
                echo '<br /><div class = "alert alert-success">Exito!!</div><br />';
              }
        ?>


            <!--formulario POST-->
            <form action="add.php" method="post">
              <br />

              <label for="nombre">Name</label>
              <input type="text" name="name" id="nombre"/>
              <br />

              <label for="correo">Email</label>
              <input type="text" name="email" id="correo"/>
              <br />

              <label for="clave">Password</label>
              <input type="password" name="password" id="clave"/>
              <br /><br />

              <input type="submit" value="Guardar"/>

            </form>

      </div>
  </body>

</html>
