<!DOCTYPE html>
<html>
<head>
        <title>Formulario de Session 1</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/uikit.min.css" />
        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.min.js"></script>
</head>

<body>


    <div class="uk-background-cover uk-height-viewport uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url(fondo.JPG);">     	

        <div class="uk-position-center uk-overlay uk-overlay-default uk-text-center">
		    
		    <form action="session.php" method="post">

			    <p class="uk-h3">Formulario de Session</p>

			    <div class="uk-margin">
			        <div class="uk-inline">
			            <span class="uk-form-icon" uk-icon="icon: user"></span>
			            <input class="uk-input" type="text" name="usuario">
			        </div>
			    </div>

			    <div class="uk-margin">
			        <div class="uk-inline">
			            <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
			            <input class="uk-input" type="password" name="contrasena">
			        </div>
			    </div>

				<div class="uk-margin">
			    	<input  class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom"  type="submit"  value="Login"  />
				</div>

			</form>
            
        </div>

    </div>


</body>
</html>