<!DOCTYPE html>
<html>
<head>
        <title>Formulario de Session 2</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/uikit.min.css" />
        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.min.js"></script>
</head>

<body>


    <div class="uk-background-cover uk-height-viewport uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url(fondo.JPG);">     	

        <div class="uk-position-center uk-overlay uk-overlay-default uk-text-center">

            <form action="destroy.php" method="post">

		    	<div class="uk-margin">
			    	<p class="uk-h3">Bienvenido Usuario: </p>	
			    </div> 

			    <div class="uk-margin">  
			    	<p class="uk-h1">	
               			<?php 
                        session_start();
                        echo $_SESSION['usuario'];
                        ?>
               	    </p>
			    </div>

			    <div class="uk-margin">
			    	<input  class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom"  type="submit"  value="Logout" />
				</div>

            </form>

        </div>

    </div>


</body>
</html>