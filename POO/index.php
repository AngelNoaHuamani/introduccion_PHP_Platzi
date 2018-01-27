<!DOCTYPE html>
<html>
<head>

  <title>Programacion Orientada a Objetos</title>
  <meta charset="utf-8">

  <!-- UIkit CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.37/css/uikit.min.css" />

  <!-- UIkit JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.37/js/uikit.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.37/js/uikit-icons.min.js"></script>

</head>


<body>

  <div class="uk-position-center  uk-text-center">

  <p class="uk-h3">
      Traits
  </p>
  <p class="uk-h5">

      <!--
      Programacion Orientada a Objetos::POO
      *Abstract: las clases abstract sirven como clase padre o base y no son instanciadas.
      -->

      <?php

      //importar archivo de clases
      include 'vehiculos/Auto.php';
      include 'vehiculos/Camioneta.php';
      include 'vehiculos/Carrito.php';


      //llamando namespace
      use Vehiculos\Auto;
      use Vehiculos\Camioneta;
      use Vehiculos\Carrito;



      echo "<strong> Clase Hija - Auto </strong> <br><br>";

      //instancia 1
      echo "<strong> Instancia 1 </strong> <br>";
      	$carro = new Auto('Juan');
      	$carro->movimiento();
      	echo "El propietario auto: " . $carro->getPropietario() . '<br>';
        echo "GPS pos: " . $carro->getPos() . '<br>';

      echo "<strong><br> Clase Hija - Camioneta </strong> <br><br>";

      //instancia 2
      echo "<strong> Instancia 2 </strong> <br>";
      	$camioneta1= new Camioneta('Pepe', '4x4');
      	$camioneta1->movimiento();

      //instancia 3
      echo "<strong> Instancia 3 </strong> <br>";
      	$camioneta2= new Camioneta('Margarito', 'Pickup');
      	$camioneta2->movimiento() . '<br><br>';

      echo "<strong><br> Clase Hija - Carrito </strong> <br><br>";

      //instancia 4 (Excepciones)
      try {
        echo "<strong> Instancia 4 </strong> <br>";
          $carrito = new Carrito('Juan');
          $carrito->movimiento();
      } catch (\Exception $e) {
          echo 'Excepcion: Esto es un carrito de juguete' . '<br>';
      } finally{
          echo 'finally' . '<br><br>';
      }

      //llamada metodo abstract
      echo "<br> Total de camionetas: " . Camioneta::getTotal() . '<br><br>';

      //Interface: llamada metodo Serializable
      $ser = serialize($carro);
      $newCarro = unserialize($ser);
      echo "Nuevo Carro propietario: " . $newCarro->getPropietario();

      ?>


  </p>
  </div>

</body>
</html>
