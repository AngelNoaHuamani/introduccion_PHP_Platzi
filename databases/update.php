
<?php

include_once 'config.php';

$result = false;

    if (!empty($_POST)) {

        $id = $_POST['id'];
        $newName = $_POST['name'];
        $newEmail = $_POST['email'];

        $sql = "UPDATE usuarios SET name=:name, email=:email WHERE id=:id";
        $query = $pdo->prepare($sql);
        $result = $query->execute([
                      'id' => $id,
                      'name' => $newName,
                      'email' => $newEmail
                  ]);

        $nameValue = $newName;
        $emailValue = $newEmail;
    }

    else {

        $id = $_GET['id'];

        $sql = "SELECT * FROM usuarios WHERE id=:id";
        $query = $pdo->prepare($sql);
        $query->execute([
                      'id' => $id
                  ]);

        $row = $query->fetch(PDO::FETCH_ASSOC);
        $nameValue = $row['name'];
        $emailValue = $row['email'];
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
        <h1>Actualizando Usuarios</h1>
        <a href="list.php">Back</a>

        <?php
              if ($result == true){
                echo '<br /><div class = "alert alert-success">Exito!!</div><br />';
              }
        ?>


            <!--formulario POST-->
            <form action="update.php" method="post">
              <br />

              <label for="nombre">Name</label>
              <input type="text" name="name" id="nombre"
                     value=" <?php echo $nameValue; ?> "
              />
              <br />

              <label for="correo">Email</label>
              <input type="text" name="email" id="correo"
                    value=" <?php echo $emailValue; ?> "
              />
              <br />

              <input type="hidden" name="id" value=" <?php echo $id; ?> " />
              <input type="submit" value="Actualizar"/>

            </form>

      </div>
  </body>

</html>
