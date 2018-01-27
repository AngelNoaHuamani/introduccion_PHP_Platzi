  <!--Instanciando clase coneccion-->
  <?php
    $dbHost = 'localhost';
    $dbName = 'curso_php_platzi';
    $dbUser = 'root';
    $dbPassword = '';

    try {
        $pdo = new PDO("mysql:host=$dbHost; dbname=$dbName",
                        $dbUser,$dbPassword);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (\Exception $e) {
        echo $e->getMessage();
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
        <h1>Databases</h1>
        <ul>
          <li>
            <a href="">Lista de Usuarios</a>
          </li>
          <li>
            <a href="">Agregar un Usuario</a>
          </li>
        </ul>
      </div>
  </body>

</html>
