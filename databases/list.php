
<?php

require_once 'config.php';

      //consulta SQL
      $sql = "SELECT * FROM usuarios";
      $queryResult = $pdo->query($sql);

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
        <h1>Listando Usuarios</h1>
        <a href="index.php">Home</a>
        <br />
        <br />

            <!--tabla-->
        <table class="table">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Editar</th>
            </tr>

        <?php

            while ($row = $queryResult->fetch(PDO::FETCH_ASSOC)) {
              echo '<tr>';
                  echo '<td>' . $row['name'] . '</td>';
                  echo '<td>' . $row['email'] . '</td>';
                  echo '<td> <a href="update.php?id=' . $row['id'] . '">Editar</a> </td>';
              echo '</tr>';
            }

        ?>

        </table>

      </div>
  </body>

</html>
